<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->role_as == 'Admin' || Auth::user()->role_as == 'Warehouse' || Auth::user()->role_as == 'User'){
            return $next($request);
        }else{
            return redirect()->route('home')->with('error','Access Denied as you are not an User');
        }
    }
}
