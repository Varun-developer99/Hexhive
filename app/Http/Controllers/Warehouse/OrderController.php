<?php

namespace App\Http\Controllers\Warehouse;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderHistory;
use Dompdf\Dompdf;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.order.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        if(Auth::user()->role_as == 'Admin'){
            $orders = Order::where('deleted_at', null);
            if($request->warehouse_filter){
                $orders = $orders->where('warehouse_id', $request->warehouse_filter);
            }
        }else{
            $orders = Order::where('warehouse_id', Auth::user()->id)->where('deleted_at', null);
        }
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new Order)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $orders = $orders->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }

        if($request->in_out_filter){
            $orders = $orders->where('in_out', $request->in_out_filter);
        }
        if($request->product_filter){
            $orders = $orders->where('product_id', $request->product_filter);
        }
        if($request->brand_filter){
            $orders = $orders->where('brand_id', $request->brand_filter);
        }
        if($request->category_filter){
            $orders = $orders->where('category_id', $request->category_filter);
        }
        // Add order_status filter for sidebar links
        if($request->order_status){
            $orders = $orders->where('order_status', $request->order_status);
        }

        $orders = $orders->orderBy('created_at','desc')->paginate($numbers);

        return view('admin.order.datatable', compact('orders'));
    }

    public function store(Request $request)
    {
        // Step 1: Validate inputs
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|string|max:255',
            'in_out' => 'required|string|max:255',
            'qty' => 'required|string|max:255',
        ]);

        // Step 2: If validation fails, return 422 JSON response
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Step 3: Save or update your data
            $input = $request->all();

            $input['created_by_id'] = Auth::user()->id;
            $product = Product::find($input['product_id']);
            $input['brand_id'] = $product->brand_id;
            $input['category_id'] = $product->category_id;
            $input['sub_category_id'] = $product->sub_category_id;
            $input['warehouse_id'] = $request->warehouse_id ?? Auth::user()->id;

            $item = Order::updateOrCreate(['id' => $input['id']],$input);

            // Step 4: Return success response with 200
            return response()->json([
                'id' => $item->id,
                'html' => view('admin.order.datatable_tr', compact('item'))->render(),
                'message' => 'Order Saved Successfully'
            ], 200);

        } catch (\Exception $e) {
            // Step 5: Handle unexpected errors
            return response()->json([
                'message' => 'Something went wrong!',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function edit(Request $request)
    {
        $order = Order::find($request->id);
        return view('admin.orders.ajax_edit', compact('order'));
    }
    public function show(Request $request)
    {
        $order = Order::find($request->id);
        return view('admin.order.show', compact('order'));
    }

     public function change_status(Request $request, $id)
    {
        $order = Order::find($id);
        $order->order_status = $request->order_status;
        $order->update();

        $input = $request->all();
        $input['created_by_id'] = Auth::user()->id;
        $input['date'] = now();
        OrderHistory::updateOrCreate(['order_id' => $order->id, 'order_status' => $request->order_status], $input);

      
        // if ($request->order_status === 'Delivered') {
        //     Mail::to($order->email)->send(new OrderConfirmationMail($order));
        // }

        return redirect()->back()->with('success', 'Order Status Updated Successfully');
    }
    public function invoice(Request $request)
    {
        $order = Order::find($request->id);

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found');
        }

        $pdf = new Dompdf();
        $pdf->loadHtml(view('admin.order.invoice', compact('order')));
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();

        return $pdf->stream('invoice.pdf');


    }
    public function delete($id)
    {
        $order = Order::find($id)->delete();

        return ['message' => ' Order Deleted Successfully'];
    }

    public function status($id)
    {
        $order = Order::find($id);
        if($order->status == 1){
            $order->status = 0;
        }else{
            $order->status = 1;
        }
        $order->save();

        return $order->status;
    }
}
