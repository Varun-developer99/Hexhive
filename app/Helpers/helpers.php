<?php

use App\Models\StockDetails;
use Illuminate\Support\Facades\Http;
   
if (! function_exists('product_current_qty')) {
    function product_current_qty($product){
        return StockDetails::where('product_id', $product->id)->selectRaw('SUM(CASE 
                WHEN in_out = "In" THEN qty 
                WHEN in_out = "Out" THEN -qty 
                ELSE 0 
            END) as current_stock')
            ->first()->current_stock ?? 0;
    }
}
if (! function_exists('price_format')) {
    function price_format($price){
        return '₹' . number_format($price, 2);
    }
}