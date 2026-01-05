<?php

namespace App\Http\Controllers;

use Razorpay\Api\Api;
use App\Models\Blog;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Coupon;
use App\Models\Policy;
use App\Models\Banners;
use App\Models\Product;
use App\Models\Category;
use App\Models\Attribute;
use App\Models\PolicyPage;
use App\Models\ShopByBrand;
use App\Models\OrderDetails;
use App\Models\OrderHistory;
use App\Models\StockDetails;
use Illuminate\Http\Request;
use App\Models\ProductReview;
use App\Models\AttributeValue;
use App\Models\ProductVariant;
use App\Models\ShopByActivity;
use App\Models\ShopByBodyPart;
use App\Models\ProductHowToWear;
use App\Models\RentalStockHistory;
use App\Models\ShopByDailySupport;
use App\Mail\OrderConfirmationMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class FrontController extends Controller
{

    public function home()
    {
        $category = Category::where('status', 1)->get();
        $fresh_arrivals = Product::where('status', 1)->where('is_featured', 0)->inRandomOrder()->limit(8)->get();
        $banners = Banners::where('status', 1)->orderBy('id','asc')->get();

        return view('front.home', compact('fresh_arrivals','category','banners'));
    }

    public function shop()
    {
        // $products = Product::where('deleted_at', null)->paginate(24);

        $categories = Category::where('status', 1)->get();

        return view('front.shop', compact('categories'));
    }

    
    public function about()
    {
        return view('front.about_us');
    }
    
    public function contact()
    {
        return view('front.contact_us');
    }

    public function product_details($slug)
    {
        if($product = Product::where('slug', $slug)->first())
        {
            $product_reviews = ProductReview::where('product_id', $product->id)->where('status',1)->with('user')->get();

            return view('front.product_details', compact('product','product_reviews'));
        }

        return view('errors.404');
    }

    public function cart()
    {
        $cart = Cart::where('user_id', Auth::user()->id)->get();

        return view('front.cart', compact('cart'));
    }
    public function update_cart(Request $request)
    {
        if(count($request->cart ?? []) > 0) {
            foreach (($request->cart ?? []) as $key => $item) {
                $cart = Cart::find($item['id']);
                $cart->qty = $item['qty'];
                if($cart->order_type == 'Subscribe') {
                    $cart->total_amount = $cart->rent_days * $cart->per_day_rent * $cart->qty;
                } else {
                    $cart->total_amount = $cart->sale_price * $cart->qty;
                }
                $cart->save();
            }
            return redirect()->route('front.checkout');
        }
        
        return redirect()->back()->with('error','Sorry! Your Cart is empty');
    }

    public function apply_coupon(Request $request)
    {
        $coupon_code = $request->coupon_code;

        if($coupon = Coupon::where('code', $coupon_code)->where('status',1)->first())
        {
            Cart::where('user_id', Auth::user()->id)->update(['coupon_id' => $coupon->id]);
            $response['status'] = 1;
            $response['message'] = 'Coupon Applied Successfully';
            $response['coupon'] = $coupon;
            return $response;
        } else {
            $response['status'] = 0;
            $response['message'] = 'Invalid Coupon Code';
            return $response;
        }

    }
    public function remove_coupon(Request $request)
    {
        Cart::where('user_id', Auth::user()->id)->update(['coupon_id' => null]);
        $response['status'] = 1;
        $response['message'] = 'Coupon removed successfully';
        return $response;
    }

    public function checkout()
    {
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        if(count($cart ?? []) > 0) {
            return view('front.checkout', compact('cart'));
        }

        return redirect()->route('home')->with('error','Sorry! Your Cart is empty');

    }

    public function place_order(Request $request)
    {
        $cart = Cart::where('user_id', Auth::user()->id)->get()->toArray();
        $user = Auth::user();
        if(count($cart ?? []) > 0) {
            $input = $request->all();
            $input['created_by_id'] = $user->id;
            $input['user_id'] = $user->id;
            $input['email'] = $user->email;
            
            // Store payment details if available
            $input['payment_method'] = $request->payment_method ?? 'COD';
            $input['payment_status'] = $request->payment_status ?? 'Pending';
            if ($request->payment_id) {
                $input['payment_id'] = $request->payment_id;
            }
            if ($request->razorpay_order_id) {
                $input['razorpay_order_id'] = $request->razorpay_order_id;
            }
            
            $order = Order::create($input);

            $sub_total = 0;
            foreach ($cart as $key => $item) {
                $input = array_merge($input, $item);

                $input['order_id'] = $order->id;

                $order_details = OrderDetails::create($input);
                $sub_total += $order_details->total_amount;

                $stock_history = new StockDetails();
                $stock_history->created_by_id = Auth::user()->id;
                $stock_history->created_by_role = Auth::user()->role_as;
                $stock_history->product_id = $order_details->product_id;
                $stock_history->from = 'Place Order';
                $stock_history->from_id = $order_details->id;
                $stock_history->in_out = 'Out';
                $stock_history->qty = $order_details->qty;
                $stock_history->save();
            }
            
            $order->sub_total = $sub_total;
            if($sub_total >= 500) {
                $order->shipping_cost = 0;
            }else{
                $order->shipping_cost = shipping_cost();
            }

            if($coupon = Coupon::find($item['coupon_id'] ?? 0)) {
                $order->discount = number_format(($sub_total * $coupon->discount) / 100, 2);
                $sub_total -= $order->discount;
                $order->coupon_id = $coupon->id ?? null;
                $order->coupon_code = $coupon->code;
            }else{
                $order->discount = 0;
            }
            
            $order->tax_amount = calculate_tax($sub_total);
            $order->grand_total = $sub_total + $order->shipping_cost;
            $order->order_no = 'H/ORD-000'.$order->id;
            $order->order_status = 'Order Placed';
            $order->save();

            $order_history = new OrderHistory();
            $order_history->created_by_id = Auth::user()->id;
            $order_history->order_id = $order->id;
            $order_history->order_status = $order->order_status;
            $order_history->date = now();
            $order_history->save();

            $encoded_order_id = encrypt($order->id);

            Cart::where('user_id', Auth::user()->id)->delete();

            // Send Order Confirmation Email
            // Mail::to($user->email)->send(new OrderConfirmationMail($order));

            return redirect()->route('front.order_complete', $encoded_order_id)->with('success','Order Placed Successfully');
        }

        return redirect()->route('home')->with('danger','Sorry! Your Cart is empty');

    }

    public function order_complete($encoded_order_id)
    {
        if($order = Order::find((decrypt($encoded_order_id))))
        {
            return view('front.order_complete', compact('order'));
        }
        return view('errors.404');
    }

    public function blog()
    {
        $blogs = Blog::where('status', 1)->latest()->paginate(10);
        $old_blogs = Blog::where('status', 1)->take(5)->get();
        $latest_blog = Blog::where('status', 1)->latest()->first();

        return view('front.blog', compact('blogs','latest_blog','old_blogs'));
    }
    public function blog_show($slug)
    {
        if($blog = Blog::where('slug', $slug)->first())
        {
            return view('front.blog_details', compact('blog'));
        }

        return view('errors.404');
    }
    
    public function policy_page_show($slug)
    {
        if($policy_page = Policy::where('slug', $slug)->first())
        {
            return view('front.policy_page_show', compact('policy_page'));
        }

        return view('errors.404');
    }
    public function combo_product_add_to_cart(Request $request)
    {
        foreach ($request->combo_product ?? [] as $key => $combo_product) 
        {
            $product_variant = ProductVariant::where('id', $combo_product['product_variant_id'])->first();
            
            Cart::where('user_id', Auth::user()->id)->where('product_id', $product_variant->product_id)->delete();

            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $product_variant->product_id;
            $cart->product_variant_id = $product_variant->id;
            $cart->attribute_value_ids = $product_variant->attribute_value_ids;
            $cart->qty = 1;
            $cart->sale_price = $product_variant->sale_price;
            $cart->total_amount = $product_variant->sale_price * $cart->qty;
            $cart->order_type = 'Combo Products';
            $cart->save();
        }


        return redirect()->route('front.cart')->with('success','Combo Added to Cart Successfully');
    }
    public function add_review(Request $request)
    {
        $product_review = new ProductReview();
        $product_review->created_by_id = Auth::user()->id;
        $product_review->user_id = $product_review->created_by_id;
        $product_review->product_id = $request->product_id;
        $product_review->rate = $request->rate;
        $product_review->title = $request->title;
        $product_review->comment = $request->comment;
        $product_review->status = 1;
        $product_review->save();

        return redirect()->back()->with('success','Review Added Successfully');
    }
    public function cancel_review(Request $request)
    {
       $product_review = ProductReview::where('user_id', Auth::user()->id)->where('product_id',$request->product_id)->delete();

        return redirect()->back()->with('success','Review Deleted Successfully');
    }
    
    public function razorpayCreateOrder(Request $request)
    {
        try {
            $api = new Api(
                env('RAZORPAY_KEY'),
                env('RAZORPAY_SECRET')
            );

            $order = $api->order->create([
                'receipt'  => 'order_rcptid_'.time(),
                'amount'   => $request->amount * 100, // rupees → paise
                'currency' => 'INR'
            ]);

            return response()->json([
                'order_id' => $order['id'],
                'key' => env('RAZORPAY_KEY'),
                'amount' => $request->amount * 100
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function razorpayVerifyPayment(Request $request)
    {
        try {
            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

            $attributes = [
                'razorpay_order_id' => $request->razorpay_order_id,
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature' => $request->razorpay_signature
            ];

            $api->utility->verifyPaymentSignature($attributes);
            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'failed', 'message' => $e->getMessage()], 400);
        }
    }
}
