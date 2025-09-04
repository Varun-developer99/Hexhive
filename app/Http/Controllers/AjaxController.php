<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;

class AjaxController extends Controller
{
    public function get_sub_category(Request $request)
    {
        $sub_categories = SubCategory::where('category_id', $request->category_id)->get();
        return view('ajax.get_sub_category', compact('sub_categories'));
    }

   
}
