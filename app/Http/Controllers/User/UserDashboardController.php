<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function inactive_dashboard()
    {
        if(Auth::user()->status == '1') {
            return redirect()->route('dashboard')->with('status', 'Your account is active.');
        }
        return view('admin.dashboard.inactive_dashboard');
    }
}
