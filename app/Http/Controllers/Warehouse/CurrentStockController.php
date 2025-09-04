<?php

namespace App\Http\Controllers\Warehouse;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class CurrentStockController extends Controller
{
    public function index()
    {
        return view('admin.current_stock.index');
    }

    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }

        if(Auth::user()->role_as == 'Admin'){
             $stockSub = DB::table('stock_details')
            ->select('product_id', DB::raw("SUM(CASE WHEN in_out = 'In' THEN qty ELSE -qty END) as current_stock"))
            ->whereNull('deleted_at')
            ->groupBy('product_id');
            
        }else{
             $stockSub = DB::table('stock_details')->where('warehouse_id', Auth::user()->id)
            ->select('product_id', DB::raw("SUM(CASE WHEN in_out = 'In' THEN qty ELSE -qty END) as current_stock"))
            ->whereNull('deleted_at')
            ->groupBy('product_id');
        }
        // Subquery to calculate current stock for each product
        // dd($stockSub->get());
        // Join products with the stock subquery
        $product = Product::whereNull('deleted_at')
            ->leftJoinSub($stockSub, 'stock', function($join) {
                $join->on('products.id', '=', 'stock.product_id');
            })
            ->select('products.*', DB::raw('COALESCE(stock.current_stock, 0) as current_stock'));

        // Apply filters/search as before
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new Product)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $product = $product->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method('products.'.$column, 'LIKE', "%{$request->search}%");
                }
            });
        }

        if($request->brand_filter){
            $product = $product->where('products.brand_id', $request->brand_filter);
        }
        if($request->category_filter){
            $product = $product->where('products.category_id', $request->category_filter);
        }
        // dd($product->get()->pluck('current_stock')->toArray());
        // dd($product->where('current_stock','<=', 0.0)->get()->pluck('current_stock')->toArray());
        // Filter by stock status
        if ($request->stock_filter == 'Out Of Stock') {
            // Stock Out Products: Only those with stock movement and now out of stock
            $product = $product->where('current_stock', '<=', 0);
        } elseif ($request->stock_filter == 'Available Stock') {
            // Available Stocks
            $product = $product->where('current_stock', '>', 0);
        }

        $product = $product->orderBy('products.created_at','desc')->paginate($numbers);


        return view('admin.current_stock.datatable', compact('product'));
    }

    // Get product with maximum stock out (most negative current_stock)
    public function mostStockOutProduct(Request $request)
    {
        if(Auth::user()->role_as == 'Admin'){
            $stockSub = DB::table('stock_details')
                ->select('product_id', DB::raw("SUM(CASE WHEN in_out = 'In' THEN qty ELSE -qty END) as current_stock"))
                ->whereNull('deleted_at')
                ->groupBy('product_id');
        }else{
            $stockSub = DB::table('stock_details')->where('warehouse_id', Auth::user()->id)
                ->select('product_id', DB::raw("SUM(CASE WHEN in_out = 'In' THEN qty ELSE -qty END) as current_stock"))
                ->whereNull('deleted_at')
                ->groupBy('product_id');
        }

        $product = Product::whereNull('deleted_at')
            ->leftJoinSub($stockSub, 'stock', function($join) {
                $join->on('products.id', '=', 'stock.product_id');
            })
            ->select('products.*', DB::raw('COALESCE(stock.current_stock, 0) as current_stock'))
            ->where('current_stock', '<', 0)
            ->orderBy('current_stock', 'asc') // Most negative first
            ->first();

        if(!$product){
            return response()->json(['status' => 'error', 'message' => 'No stock out product found']);
        }
        return response()->json(['status' => 'success', 'data' => $product]);
    }
}
