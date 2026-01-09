<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Overview stats
        $total_products = Product::count();
        $total_customers = Customer::count();
        $total_orders = Order::count();
        $total_sales = Order::whereNotNull('grand_total')->sum('grand_total');

        // Recent orders (latest 5)
        $recent_orders = Order::with(['user'])->latest()->take(5)->get();

        // Top selling products (by qty in order_details)
        $top_products = OrderDetails::select('product_id', DB::raw('SUM(qty) as total_sold'))
            ->groupBy('product_id')
            ->orderByDesc('total_sold')
            ->with('product')
            ->take(4)
            ->get();

        return view('admin.dashboard.admin_dashboard', compact(
            'total_products',
            'total_customers',
            'total_orders',
            'total_sales',
            'recent_orders',
            'top_products'
        ));
    }
}
