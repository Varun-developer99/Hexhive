<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $category = Category::all();
        $product = Product::all();
        return view('front.home', compact('category', 'product'));
    }
    public function about(){
        return view('front.about');
    }

    public function contact(){
        return view('front.contact_us');
    }
    public function shop(){
        $products = Product::where('status', 1)->orderBy('id', 'desc')->paginate(20);
        $category = Category::all();
        return view('front.shop', compact('products', 'category'));
    }

    public function shop_detail($slug){
        $product = Product::where('slug', $slug)->where('status', 1)->firstOrFail();
         $related_products = Product::where('category_id', $product->category_id)
                                  ->where('id', '!=', $product->id)
                                  ->where('status', 1)
                                  ->limit(4)
                                  ->get();
        return view('front.shop_detail', compact('product', 'related_products'));
    }

    public function blog(){
        return view('front.blog');
    }   

    public function blog_detail(){
        return view('front.blog_detail');
    }


    public function cart(){
        return view('front.cart');
    }

    public function check_out(){
        return view('front.check_out');
    }
}