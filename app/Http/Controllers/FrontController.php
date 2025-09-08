<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('front.home');
    }
    public function about(){
        return view('front.about');
    }

    public function contact(){
        return view('front.contact_us');
    }
    public function shop(){
        return view('front.shop');
    }

    public function shop_detail(){
        return view('front.shop_detail');
    }

    public function blog(){
        return view('front.blog');
    }   

    public function blog_detail(){
        return view('front.blog_detail');
    }
}