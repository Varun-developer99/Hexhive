<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->role_as == 'Admin')
        {
            return redirect()->route('admin.dashboard')->with('error', session('error'))->with('status', session('status'));
        }
        else
        {
            return redirect()->route('customer.dashboard')->with('error', session('error'))->with('status', session('status'));
        }
        
    }

   
}
