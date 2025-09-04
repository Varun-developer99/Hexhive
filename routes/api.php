<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\FrontController;
use App\Http\Controllers\API\APICustomerController;
use App\Http\Controllers\Warehouse\OrderController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/verify-login-otp', [AuthController::class, 'verify_login_otp']);
Route::post('/resend-otp', [AuthController::class, 'resend_otp']);
Route::post('/verify_token', [AuthController::class, 'verify_token']);
Route::post('/warehouse/register', [AuthController::class, 'warehouse_register']);
Route::get('/forgetpassword', [AuthController::class, 'forgetpassword']);
Route::post('/savepassword', [AuthController::class, 'savepassword']);

Route::get('/home', [FrontController::class, 'home']);
Route::get('/products', [FrontController::class, 'products']);
Route::get('/product/{slug}', [FrontController::class, 'product_show']);
Route::get('/brands', [FrontController::class, 'brands']);
Route::get('/categories', [FrontController::class, 'categories']);
Route::get('/category/{id}/products', [FrontController::class, 'products_by_category']);
Route::get('/sub_categories/{slug}', [FrontController::class, 'sub_categories']);

Route::post('/store-address', [FrontController::class, 'store_address']);
Route::get('/get-addresses', [FrontController::class, 'get_addresses']);
Route::get('/get-address/{id}', [FrontController::class, 'get_address']);
Route::get('/store-availability/{pincode}', [FrontController::class, 'store_availability']);

Route::post('/subscribe-store', [FrontController::class, 'subscribe_store']);
Route::post('/contact-store', [FrontController::class, 'contact_store']);
Route::get('/combo-products/{id}', [FrontController::class, 'comboproducts']);
Route::get('/homecomboproducts', [FrontController::class, 'homecomboproducts']);

Route::get('/blogs', [FrontController::class, 'blogs']);
Route::get('/blog/{slug}', [FrontController::class, 'blog_show']);

//Banners
Route::get('/banners', [FrontController::class, 'banners']);
Route::get('/banners/{slug}', [FrontController::class, 'banner_show']);

Route::get('/policies', [FrontController::class, 'policies']);
Route::get('/policy/{slug}', [FrontController::class, 'policy_show']);

Route::get('/orders/invoice/{id}', [OrderController::class, 'invoice']);
Route::get('/upselling/{id}', [FrontController::class, 'upselling']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    
    Route::post('/place-order', [FrontController::class, 'place_order']);
    Route::post('/edit-profile', [FrontController::class, 'editprofile']);
    Route::post('/add-to-cart', [FrontController::class, 'add_to_cart']);
    Route::get('/cart-items', [FrontController::class, 'cart_items']);
    Route::post('/remove-cart-item', [FrontController::class, 'remove_cart_item']);
    Route::get('/dashboard-data', [FrontController::class, 'dashboard_data']);
    Route::get('/order-history', [FrontController::class, 'order_history']);
    Route::get('/order-details/{order_no}', [FrontController::class, 'order_details']);
    

});