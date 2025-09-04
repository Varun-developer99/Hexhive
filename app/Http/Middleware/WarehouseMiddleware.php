<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class WarehouseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->role_as == 'Warehouse' || Auth::user()->role_as == 'Admin'){
            if(Auth::user()->status == '1'){
                return $next($request);
            }
            else{
                return redirect()->route('user.inactive_dashboard')->with('error','Access Denied as your account is not active');
            }
        }else{
            return redirect()->route('home')->with('error','Access Denied as you are not a Warehouse');
        }
    }
}
