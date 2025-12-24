<?php

namespace App\Http\Controllers\Customer;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Order;
use App\Models\Coupon;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use App\Models\RentalOrderHistory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerDashboardController extends Controller
{
    public function dashboard()
    {
        $total_orders = Order::where('user_id', Auth::user()->id)->count();
        $processing_orders = Order::where('user_id', Auth::user()->id)->whereIn('order_status', ['Order Placed', 'Processing', 'Packed'])->count();
        $shipped_orders = Order::where('user_id', Auth::user()->id)->where('order_status', 'Shipped')->count();
        $delivered_orders = Order::where('user_id', Auth::user()->id)->where('order_status', 'Delivered')->count();
        return view('front.dashboard.index', compact('total_orders', 'processing_orders', 'delivered_orders', 'shipped_orders'));
    }
    public function order()
    {
        $orders = Order::where('user_id', Auth::user()->id)->latest()->get();
        return view('front.dashboard.orders', compact('orders'));
    }
    public function rental_order()
    {
        $order_details = OrderDetails::where('user_id', Auth::user()->id)->where('order_type', 'Subscribe')->latest()->get();
        return view('front.dashboard.rental_orders', compact('order_details'));
    }
    public function order_show($id)
    {
        $order = Order::where('user_id', Auth::user()->id)->where('id',$id)->first();
        if($order){
            return view('front.dashboard.order_show', compact('order'));
        }
        return view('errors.404');
    }

    public function download_invoice($order_id)
    {
       $order = Order::findOrFail($order_id);

       return view('front.pdf.invoice', compact('order'));
       $pdf = new Dompdf();
       $pdf->loadHtml(view('front.pdf.invoice', compact('order')));
   
       $pdf->setPaper('A4', 'portrait');
   
       $pdf->render();

       return $pdf->stream('invoice_ORD-000'.$order->id.'.pdf');
    }

    public function profile_edit()
    {
        $user = Auth::user();
        return view('front.dashboard.profile_edit', compact('user'));
    }
    
    public function profile_update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:50',
        ]);
        $user = Auth::user();
        if($request->current_password){
            if(Hash::check($request->current_password, $user->password)){
                if($request->new_password){
                    $request->validate([
                        'new_password' => 'required|string|min:8|confirmed',
                    ]);
                    $user->password = Hash::make($request->new_password);
                    $user->show_password = $request->new_password;
                }
            }else{
                return redirect()->back()->with('error', 'Current password is incorrect!');
            }
            if($request->new_password != $request->new_password_confirmation){
                return redirect()->back()->with('error', 'New password and confirmation do not match!');
            }
            if($request->new_password){
                $user->password = Hash::make($request->new_password);
            }
        }
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->save();

        return redirect()->route('customer.profile_edit')->with('success', 'Profile updated successfully!');
    }

    public function rental_order_extend(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:order_details,id',
            'extended_days' => 'required|integer|min:1',
            'remarks' => 'required|string|max:255',
        ]);

        $order_details = OrderDetails::where('user_id', Auth::user()->id)->where('id', $request->id)->where('order_type', 'Subscribe')->first();
        if(!$order_details){
            return redirect()->back()->with('error', 'Order detail not found!');
        }

        $order_details->rental_status = 'Extended';
        $old_rental_end_date = $order_details->rental_end_date;
       
        $rental_amount_increase = ($order_details->per_day_rent * $request->extended_days * $order_details->qty);
        $order_details->total_amount = ($order_details->total_amount ?? 0) + $rental_amount_increase;
        $order_details->extended_days = ($order_details->extended_days ?? 0) + ($request->extended_days ?? 0);
        $order_details->rental_end_date = date('Y-m-d', strtotime("+{$request->extended_days} days" . ($order_details->rental_end_date ?? date('Y-m-d'))));
        $order_details->save();

        $order = Order::find($order_details->order_id);
        $order->sub_total = $order->sub_total + $rental_amount_increase;
        $order->tax_amount = calculate_tax($order->sub_total);
        $order->grand_total = $order->sub_total + $order->shipping_cost;
        $order->save();
        $rental_order_history = new RentalOrderHistory();
        $rental_order_history->created_by_id = Auth::user()->id;
        $rental_order_history->order_id = $order_details->order_id;
        $rental_order_history->order_details_id = $order_details->id;
        $rental_order_history->rental_status = $order_details->rental_status;
        $rental_order_history->extended_days = $order_details->extended_days;
        $extended_details = "<ul>
        <li>Previous End Date: " . ($old_rental_end_date ? date('d-m-Y', strtotime($old_rental_end_date)) : 'N/A') . "</li>
        <li>Extended Days: " . ($request->extended_days ?? 0) . "</li>
        <li>New End Date: " . ($order_details->rental_end_date ? date('d-m-Y', strtotime($order_details->rental_end_date)) : 'N/A') . "</li>
        </ul>";
        $rental_order_history->extended_details = $extended_details ?? null;
        $rental_order_history->remarks = $request->remarks;
        $rental_order_history->save();

        return redirect()->route('customer.rental_order')->with('success', 'Rental period extended successfully!');
    }
}
