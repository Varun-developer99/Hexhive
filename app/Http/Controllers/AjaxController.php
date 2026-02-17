<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Attribute;
use App\Models\OrderDetails;
use Illuminate\Http\Request;

use App\Models\AttributeValue;
use App\Models\ProductVariant;
use function Pest\Laravel\json;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    function login_modal(Request $request)
    {
        return view('front.ajax.login_modal');
    }
    function register_modal(Request $request)
    {
        return view('front.ajax.register_modal');
    }
    function get_attribute_values(Request $request)
    {
        $attributes = Attribute::whereIn('id',($request->attribute_ids ?? []))->get();

        return view('admin.ajax.get_attribute_values', compact('attributes'));
    }
    function get_product_filter(Request $request)
    {
        $products = Product::where('status', 1);

        if($request->search){
            $products = $products->where('name', 'like', '%'.$request->search.'%');
        }
        if($request->short_by == 'Alphabetically, A-Z'){
            $products = $products->orderBy('name', 'asc');
        }
        if($request->short_by == 'Alphabetically, Z-A'){
            $products = $products->orderBy('name', 'desc');
        }
        if($request->short_by == 'Price, low to high'){
            $products = $products->orderBy('sale_price', 'asc');
        }
        if($request->short_by == 'Price, high to low'){
            $products = $products->orderBy('sale_price', 'desc');
        }
        if(isset($request->price_min_value) && isset($request->price_max_value) && is_numeric($request->price_min_value) && is_numeric($request->price_max_value)){
            $products = $products->whereBetween('sale_price', [(int)$request->price_min_value, (int)$request->price_max_value]);
        }
        if(!empty($request->categories_ids)) {
            // products table uses single category_id column
            $products = $products->whereIn('category_id', $request->categories_ids);
        }

        $products = $products->paginate(24);
        // dd($products->total());

        $response['html'] = view('front.ajax.get_product_filter', compact('products'))->render();
        $response['message'] = 'Success';
        $response['total_products'] = $products->total();

        return $response;
    }

    public function quick_view_product(Request $request)
    {
        $product = Product::where('id', $request->product_id)->first();

        // if(!empty($product_variant)) {
        //     $response['html'] = '';
        // } else {
        //     $response['html'] = '';
        //     $response['message'] = 'Oops! Something went wrong.';
        // }
        $response['html'] = view('front.ajax.quick_view_product', compact('product'))->render();
        $response['message'] = 'Success';
        $response['product'] = ($product ?? []);

        return $response;
    }
    public function add_to_cart(Request $request)
    {

        $product = Product::where('id', $request->product_id)->first();

        if(!empty($product)) {
            if(!($cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $request->product_id)->first())) {
                $cart = new Cart();
            }
            // $cart->qty = ($cart->qty ?? 0) + $request->qty;
            $cart->qty = $request->qty;
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $request->product_id;
            if(($product->current_stock ?? 0) < $cart->qty) {
                $response['html'] = '';
                $response['message'] = 'Oops! Product stock is not enough.';
                return $response;
            }
            $cart->sale_price = $product->sale_price;
            $cart->total_amount = $product->sale_price * $cart->qty;
            $cart->order_type = $request->order_type ?? 'Single';
            $cart->save();
        }

        if(!empty($product) && !empty($cart)) {
            $response['html'] = cart_items_html(Auth::user()->id);
            $response['status'] = 200;
            $response['message'] = 'Cart Item Added Successfully';
        } else {
            $response['html'] = '';
            $response['message'] = 'Oops! Something went wrong.';
        }
        $response['product'] = ($product ?? []);
        $response['cart'] = ($cart ?? []);
        $response['cart_count'] = count(cart_items_data(Auth::user()->id));
       
        return $response;
    }

    public function remove_from_cart(Request $request)
    {
        $cart = Cart::where('user_id', Auth::user()->id)->where('id', $request->cart_id)->first();
        if(!empty($cart)) {
            $cart->delete();
            $response['html'] = cart_items_html(Auth::user()->id);
            $response['status'] = 200;
            $response['message'] = 'Cart Item Removed Successfully';
        } else {
            $response['html'] = '';
            $response['message'] = 'Oops! Something went wrong.';
        }
        $response['cart'] = ($cart ?? []);
        $response['cart_count'] = count(cart_items_data(Auth::user()->id));
        return $response;
    }
    
    public function cart_items_html(Request $request)
    {
        return cart_items_html(Auth::user()->id);
    }

    public function get_rental_activity(Request $request)
    {
        $order_details = OrderDetails::find($request->id);
        
        return view('front.ajax.get_rental_activity', compact('order_details'));
    }
    public function extend_rental_modal(Request $request)
    {
        $order_details = OrderDetails::find($request->id);

        return view('front.ajax.extend_rental_modal', compact('order_details'));
    }
}
