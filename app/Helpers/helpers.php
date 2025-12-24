<?php

use App\Models\FAQ;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\Attribute;
use App\Models\PolicyPage;
use App\Models\TopBarText;
use App\Models\ComboProduct;
use App\Models\OrderDetails;
use App\Models\StockDetails;
use App\Models\StockHistory;
use App\Models\ProductReview;
use App\Models\AttributeValue;
use App\Models\ProductVariant;
use App\Models\RentalStockHistory;
use App\Models\ProductVariantImage;

if (! function_exists('price')) {
    function price($price){
        return '₹'.number_format((float) $price, 2);
    }
}
if (! function_exists('calculate_tax')) {
    function calculate_tax($price) {
        $tax = $price - ($price / 1.18);
        return number_format((float)$tax, 2, '.', '');
    }
}
if (! function_exists('cart_items_html')) {
    function cart_items_html($user_id){
        $cart_items = Cart::where('user_id', $user_id)->get();
        return view('front.ajax.add_to_cart_modal', compact('cart_items'))->render();
    }
}
if (! function_exists('cart_items_data')) {
    function cart_items_data($user_id){
        return Cart::where('user_id', $user_id)->get();
    }
}
if (! function_exists('category_data')) {
    function category_data($attribute_id){
        return Category::find( $attribute_id );
    }
}
if (! function_exists('product_current_stock')) {
    function product_current_stock($product_id) {
        return StockDetails::where('product_id', $product_id)
            ->selectRaw('SUM(CASE 
                WHEN in_out = "In" THEN qty 
                WHEN in_out = "Out" THEN -qty 
                ELSE 0 
            END) as total_stock')
            ->first()->total_stock ?? 0;
    }
}
if (! function_exists('product_faqs_data')) {
    function product_faqs_data($faqs_ids){
        return FAQ::whereIn('id', $faqs_ids)->where('status', 1)->get();
    }
}
if (! function_exists('related_products_random')) {
    function related_products_random($number){
        return Product::where('status', 1)->inRandomOrder()->take($number)->get();
    }
}
if (! function_exists('product_data')) {
    function product_data($product_id){
        return Product::find($product_id);
    }
}
if (! function_exists('policy_pages')) {
    function policy_pages(){
        return PolicyPage::where('status', 1)->get();
    }
}
// if (! function_exists('combo_product_data')) {
//     function combo_product_data($product_id){
//         return ComboProduct::whereJsonContains('product_ids', ((string)$product_id))->where('status', 1)->first();
//     }
// }
if (! function_exists('check_product_is_buy')) {
    function check_product_is_buy($user_id, $product_id){
        return OrderDetails::where('user_id', $user_id)->where('product_id', $product_id)->first();
    }
}
if (! function_exists('check_review_exist')) {
    function check_review_exist($user_id, $product_id){
        return ProductReview::where('user_id', $user_id)->where('product_id', $product_id)->first();
    }
}
if (! function_exists('product_review_rating_overall')) {
    function product_review_rating_overall($product_reviews){
        return number_format($product_reviews->avg('rate'), 1);
    }
}
if (! function_exists('top_bar_text_data')) {
    function top_bar_text_data(){
        return TopBarText::where('status', 1)->get();
    }
}
if (! function_exists('shipping_cost')) {
    function shipping_cost(){
        return 9;
    }
}
// if (!function_exists('variant_has_stock')) {
//     function variant_has_stock($product_id, $attribute_value_id) {
//         return ProductVariant::where('product_id', $product_id)
//             ->whereJsonContains('attribute_value_ids', $attribute_value_id)
//             ->where('opening_stock', '>', 0)
//             ->exists();
//     }
// }


  