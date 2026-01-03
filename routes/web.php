<?php

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Warehouse\OrderController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\PolicyController;
use App\Http\Controllers\Admin\BannersController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\WebsiteController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\HomeVideoController;
use App\Http\Controllers\Admin\BotteltypeController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\Admin\PolicyPageController;
use App\Http\Controllers\Admin\TopBarTextController;
use App\Http\Controllers\Admin\ShopByBrandController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ComboProductController;
use App\Http\Controllers\Admin\StockHistoryController;
use App\Http\Controllers\Admin\ComboProductsController;
use App\Http\Controllers\Admin\ProductReviewController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ShopByActivityController;
use App\Http\Controllers\Admin\ShopByBodyPartController;
use App\Http\Controllers\Warehouse\CurrentStockController;
use App\Http\Controllers\Warehouse\StockDetailsController;
use App\Http\Controllers\Admin\RentalStockHistoryController;
use App\Http\Controllers\Admin\ShopByDailySupportController;
use App\Http\Controllers\Customer\CustomerDashboardController;
// use App\Http\Controllers\Front\ShopController;   
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [FrontController::class, 'home'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('media/delete/{id}', [WebsiteController::class, 'media_delete'])->name('media.delete');
    Route::post('edit_profile/store', [WebsiteController::class, 'edit_profile_store'])->name('edit_profile.store');
    Route::get('media/delete/{id}', [WebsiteController::class, 'media_delete'])->name('media.delete');
});

Route::group(['middleware' => ['auth','is_Admin'], 'prefix' => 'admin'], function () {

    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    // Website Setting
    Route::get('website-setting', [WebsiteController::class, 'index'])->name('admin.website.setting');
    Route::post('website-setting/insert', action: [WebsiteController::class, 'insert'])->name('admin.website.setting.insert');

    // Category
    Route::get('category', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('category/datatable', [CategoryController::class, 'datatable'])->name('admin.category.datatable');
    Route::post('category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('category/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::get('category/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
    Route::get('category/status/{id}', [CategoryController::class, 'status'])->name('admin.category.status');

    // Bottel Type
    Route::get('botteltype', [BotteltypeController::class, 'index'])->name('admin.botteltype.index');
    Route::get('botteltype/datatable', [BotteltypeController::class, 'datatable'])->name('admin.botteltype.datatable');
    Route::post('botteltype/store', [BotteltypeController::class, 'store'])->name('admin.botteltype.store');
    Route::get('botteltype/edit', [BotteltypeController::class, 'edit'])->name('admin.botteltype.edit');
    Route::get('botteltype/delete/{id}', [BotteltypeController::class, 'delete'])->name('admin.botteltype.delete');
    Route::get('botteltype/status/{id}', [BotteltypeController::class, 'status'])->name('admin.botteltype.status');

    // Sub Category
    Route::get('sub_category', [SubCategoryController::class, 'index'])->name('admin.sub_category.index');
    Route::get('sub_category/datatable', [SubCategoryController::class, 'datatable'])->name('admin.sub_category.datatable');
    Route::post('sub_category/store', [SubCategoryController::class, 'store'])->name('admin.sub_category.store');
    Route::get('sub_category/edit', [SubCategoryController::class, 'edit'])->name('admin.sub_category.edit');
    Route::get('sub_category/delete/{id}', [SubCategoryController::class, 'delete'])->name('admin.sub_category.delete');
    Route::get('sub_category/status/{id}', [SubCategoryController::class, 'status'])->name('admin.sub_category.status');

    // Brand
    Route::get('brand', [BrandController::class, 'index'])->name('admin.brand.index');
    Route::get('brand/datatable', [BrandController::class, 'datatable'])->name('admin.brand.datatable');
    Route::post('brand/store', [BrandController::class, 'store'])->name('admin.brand.store');
    Route::get('brand/edit', [BrandController::class, 'edit'])->name('admin.brand.edit');
    Route::get('brand/delete/{id}', [BrandController::class, 'delete'])->name('admin.brand.delete');
    Route::get('brand/status/{id}', [BrandController::class, 'status'])->name('admin.brand.status');
    
    // home_slider
    Route::get('home_slider', [HomeSliderController::class, 'index'])->name('admin.home_slider');
    Route::get('home_slider/datatable', [HomeSliderController::class, 'datatable'])->name('admin.home_slider.datatable');
    Route::post('home_slider/insert', [HomeSliderController::class, 'insert'])->name('admin.home_slider.insert');
    Route::get('home_slider/edit', [HomeSliderController::class, 'edit'])->name('admin.home_slider.edit');
    Route::get('home_slider/delete/{id}', [HomeSliderController::class, 'delete'])->name('admin.home_slider.delete');
    Route::get('home_slider/status', [HomeSliderController::class, 'status'])->name('admin.home_slider.status');
    // home_video
    Route::get('home_video', [HomeVideoController::class, 'index'])->name('admin.home_video');
    Route::get('home_video/datatable', [HomeVideoController::class, 'datatable'])->name('admin.home_video.datatable');
    Route::post('home_video/insert', [HomeVideoController::class, 'insert'])->name('admin.home_video.insert');
    Route::get('home_video/edit', [HomeVideoController::class, 'edit'])->name('admin.home_video.edit');
    Route::get('home_video/delete/{id}', [HomeVideoController::class, 'delete'])->name('admin.home_video.delete');
    Route::get('home_video/status', [HomeVideoController::class, 'status'])->name('admin.home_video.status');
    // attribute
    Route::get('attribute', [AttributeController::class, 'index'])->name('admin.attribute');
    Route::get('attribute/datatable', [AttributeController::class, 'datatable'])->name('admin.attribute.datatable');
    Route::post('attribute/insert', [AttributeController::class, 'insert'])->name('admin.attribute.insert');
    Route::get('attribute/edit', [AttributeController::class, 'edit'])->name('admin.attribute.edit');
    Route::get('attribute/delete/{id}', [AttributeController::class, 'delete'])->name('admin.attribute.delete');
    Route::get('attribute/status', [AttributeController::class, 'status'])->name('admin.attribute.status');
    // attribute
    Route::get('faq', [FAQController::class, 'index'])->name('admin.faq');
    Route::get('faq/datatable', [FAQController::class, 'datatable'])->name('admin.faq.datatable');
    Route::post('faq/insert', [FAQController::class, 'insert'])->name('admin.faq.insert');
    Route::get('faq/edit', [FAQController::class, 'edit'])->name('admin.faq.edit');
    Route::get('faq/delete/{id}', [FAQController::class, 'delete'])->name('admin.faq.delete');
    Route::get('faq/status', [FAQController::class, 'status'])->name('admin.faq.status');

    // Stock History
    Route::get('stock_history', [StockHistoryController::class, 'index'])->name('admin.stock_history');
    Route::get('stock_history/datatable', [StockHistoryController::class, 'datatable'])->name('admin.stock_history.datatable');
    Route::post('stock_history/insert', [StockHistoryController::class, 'insert'])->name('admin.stock_history.insert');
    Route::get('stock_history/edit', [StockHistoryController::class, 'edit'])->name('admin.stock_history.edit');
    Route::get('stock_history/delete/{id}', [StockHistoryController::class, 'delete'])->name('admin.stock_history.delete');
    Route::get('stock_history/status', [StockHistoryController::class, 'status'])->name('admin.stock_history.status');
    Route::get('current_stock', [StockHistoryController::class, 'current_stock'])->name('admin.current_stock');
    Route::get('current_stock/datatable', [StockHistoryController::class, 'current_stock_datatable'])->name('admin.current_stock_datatable');
    // Rental Stock History
    Route::get('rental_stock_history', [RentalStockHistoryController::class, 'index'])->name('admin.rental_stock_history');
    Route::get('rental_stock_history/datatable', [RentalStockHistoryController::class, 'datatable'])->name('admin.rental_stock_history.datatable');
    Route::post('rental_stock_history/insert', [RentalStockHistoryController::class, 'insert'])->name('admin.rental_stock_history.insert');
    Route::get('rental_stock_history/edit', [RentalStockHistoryController::class, 'edit'])->name('admin.rental_stock_history.edit');
    Route::get('rental_stock_history/delete/{id}', [RentalStockHistoryController::class, 'delete'])->name('admin.rental_stock_history.delete');
    Route::get('rental_stock_history/status', [RentalStockHistoryController::class, 'status'])->name('admin.rental_stock_history.status');
    Route::get('rental_current_stock', [RentalStockHistoryController::class, 'rental_current_stock'])->name('admin.rental_current_stock');
    Route::get('rental_current_stock/datatable', [RentalStockHistoryController::class, 'rental_current_stock_datatable'])->name('admin.rental_current_stock_datatable');
    // All Orders
    Route::get('orders', [OrderController::class, 'index'])->name('warehouse.orders.index');
    Route::get('orders/datatable', [OrderController::class, 'datatable'])->name('warehouse.orders.datatable');
    Route::post('orders/store', [OrderController::class, 'store'])->name('warehouse.orders.store');
    Route::get('orders/edit', [OrderController::class, 'edit'])->name('warehouse.orders.edit');
    Route::get('orders/show/{id}', [OrderController::class, 'show'])->name('warehouse.orders.show');
    Route::post('order/change_status/{id}', [OrderController::class, 'change_status'])->name('warehouse.order.change_status');
    Route::get('orders/invoice/{id}', [OrderController::class, 'invoice'])->name('warehouse.orders.invoice');

    Route::get('orders/delete/{id}', [OrderController::class, 'delete'])->name('warehouse.orders.delete');
    Route::get('orders/status/{id}', [OrderController::class, 'status'])->name('warehouse.orders.status');

    //Refunded
    Route::get('refunded', [RefundRequestController::class, 'index'])->name('warehouse.refunded.index');


      // Product
    Route::get('product', [ProductController::class, 'index'])->name('admin.product.index');
    Route::get('product/datatable', [ProductController::class, 'datatable'])->name('admin.product.datatable');
    Route::post('product/store', [ProductController::class, 'store'])->name('admin.product.store');
    Route::get('product/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::get('product/delete/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');
    Route::get('product/status/{id}', [ProductController::class, 'status'])->name('admin.product.status');

    // Combo Products
    Route::get('combo_product', [ComboProductController::class, 'index'])->name('admin.combo_product');
    Route::get('combo_product/datatable', [ComboProductController::class, 'datatable'])->name('admin.combo_product.datatable');
    Route::post('combo_product/insert', [ComboProductController::class, 'insert'])->name('admin.combo_product.insert');
    Route::get('combo_product/edit', [ComboProductController::class, 'edit'])->name('admin.combo_product.edit');
    Route::get('combo_product/delete/{id}', [ComboProductController::class, 'delete'])->name('admin.combo_product.delete');
    // Coupon
    Route::get('coupon', [CouponController::class, 'index'])->name('admin.coupon');
    Route::get('coupon/datatable', [CouponController::class, 'datatable'])->name('admin.coupon.datatable');
    Route::post('coupon/insert', [CouponController::class, 'insert'])->name('admin.coupon.insert');
    Route::get('coupon/edit', [CouponController::class, 'edit'])->name('admin.coupon.edit');
    Route::get('coupon/delete/{id}', [CouponController::class, 'delete'])->name('admin.coupon.delete');
    // Blog
    Route::get('blog', [BlogController::class, 'index'])->name('admin.blog.index');
    Route::get('blog/datatable', [BlogController::class, 'datatable'])->name('admin.blog.datatable');
    Route::post('blog/store', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::get('blog/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::get('blog/delete/{id}', [BlogController::class, 'delete'])->name('admin.blog.delete');
    Route::get('blog/status/{id}', [BlogController::class, 'status'])->name('admin.blog.status');
    // Policy_page
    Route::get('policy_page', [PolicyPageController::class, 'index'])->name('admin.policy_page');
    Route::get('policy_page/datatable', [PolicyPageController::class, 'datatable'])->name('admin.policy_page.datatable');
    Route::post('policy_page/insert', [PolicyPageController::class, 'insert'])->name('admin.policy_page.insert');
    Route::get('policy_page/edit', [PolicyPageController::class, 'edit'])->name('admin.policy_page.edit');
    Route::get('policy_page/delete/{id}', [PolicyPageController::class, 'delete'])->name('admin.policy_page.delete');
    // Product Review
    Route::get('product_review', [ProductReviewController::class, 'index'])->name('admin.product_review');
    Route::get('product_review/datatable', [ProductReviewController::class, 'datatable'])->name('admin.product_review.datatable');
    Route::post('product_review/insert', [ProductReviewController::class, 'insert'])->name('admin.product_review.insert');
    Route::get('product_review/edit', [ProductReviewController::class, 'edit'])->name('admin.product_review.edit');
    Route::get('product_review/delete/{id}', [ProductReviewController::class, 'delete'])->name('admin.product_review.delete');
    Route::get('product_review/status/{id}', [ProductReviewController::class, 'status'])->name('admin.product_review.status');
    // Top Bar Text
    Route::get('top_bar_text', [TopBarTextController::class, 'index'])->name('admin.top_bar_text');
    Route::get('top_bar_text/datatable', [TopBarTextController::class, 'datatable'])->name('admin.top_bar_text.datatable');
    Route::post('top_bar_text/insert', [TopBarTextController::class, 'insert'])->name('admin.top_bar_text.insert');
    Route::get('top_bar_text/edit', [TopBarTextController::class, 'edit'])->name('admin.top_bar_text.edit');
    Route::get('top_bar_text/delete/{id}', [TopBarTextController::class, 'delete'])->name('admin.top_bar_text.delete');
    Route::get('top_bar_text/status/{id}', [TopBarTextController::class, 'status'])->name('admin.top_bar_text.status');
    
    // Newsletter Controller
    Route::get('newsletter', [NewsletterController::class, 'index'])->name('admin.newsletter');
    Route::get('newsletter/datatable', [NewsletterController::class, 'datatable'])->name('admin.newsletter.datatable');
    Route::get('newsletter/edit', [NewsletterController::class, 'edit'])->name('admin.newsletter.edit');
    Route::get('newsletter/delete/{id}', [NewsletterController::class, 'delete'])->name('admin.newsletter.delete');
    Route::get('newsletter/status/{id}', [NewsletterController::class, 'status'])->name('admin.newsletter.status');
//Contact Us
    Route::get('contact', [ContactController::class, 'index'])->name('admin.contact.index');
    Route::get('contact/datatable', [ContactController::class, 'datatable'])->name('admin.contact.datatable');
    Route::get('contact/delete/{id}', [ContactController::class, 'delete'])->name('admin.contact.delete');
    Route::get('contact/status/{id}', [ContactController::class, 'status'])->name('admin.contact.status');
      //Customer
    Route::get('customer', [CustomerController::class, 'index'])->name('admin.customer.index');
    Route::get('customer/datatable', [CustomerController::class, 'datatable'])->name('admin.customer.datatable');
    Route::post('customer/store', [CustomerController::class, 'store'])->name('admin.customer.store');
    Route::get('customer/edit', [CustomerController::class, 'edit'])->name('admin.customer.edit');
    Route::get('customer/delete/{id}', [CustomerController::class, 'delete'])->name('admin.customer.delete');
    Route::get('customer/status/{id}', [CustomerController::class, 'status'])->name('admin.customer.status');

  
    //Banners
    Route::get('banners', [BannersController::class, 'index'])->name('admin.banners.index');
    Route::get('banners/datatable', [BannersController::class, 'datatable'])->name('admin.banners.datatable');
    Route::post('banners/store', [BannersController::class, 'store'])->name('admin.banners.store');
    Route::get('banners/edit', [BannersController::class, 'edit'])->name('admin.banners.edit');
    Route::get('banners/delete/{id}', [BannersController::class, 'delete'])->name('admin.banners.delete');
    Route::get('banners/status/{id}', [BannersController::class, 'status'])->name('admin.banners.status');
    // Combo Products
    Route::get('comboproducts', [ComboProductsController::class, 'index'])->name('admin.comboproducts.index');
    Route::get('comboproducts/datatable', [ComboProductsController::class, 'datatable'])->name('admin.comboproducts.datatable');
    Route::post('comboproducts/store', [ComboProductsController::class, 'store'])->name('admin.comboproducts.store');
    Route::get('comboproducts/edit', [ComboProductsController::class, 'edit'])->name('admin.comboproducts.edit');
    Route::get('comboproducts/delete/{id}', [ComboProductsController::class, 'delete'])->name('admin.comboproducts.delete');
    Route::get('comboproducts/status/{id}', [ComboProductsController::class, 'status'])->name('admin.comboproducts.status');

    // CurrentStock
    Route::get('current_stock', [CurrentStockController::class, 'index'])->name('warehouse.current_stock.index');
    Route::get('current_stock/datatable', [CurrentStockController::class, 'datatable'])->name('warehouse.current_stock.datatable');
    // Stock Details
    Route::get('stock_details', [StockDetailsController::class, 'index'])->name('warehouse.stock_details.index');
    Route::get('stock_details/datatable', [StockDetailsController::class, 'datatable'])->name('warehouse.stock_details.datatable');
    Route::post('stock_details/store', [StockDetailsController::class, 'store'])->name('warehouse.stock_details.store');
    Route::get('stock_details/edit', [StockDetailsController::class, 'edit'])->name('warehouse.stock_details.edit');
    Route::get('stock_details/delete/{id}', [StockDetailsController::class, 'delete'])->name('warehouse.stock_details.delete');
    Route::get('stock_details/current_stock', [StockDetailsController::class, 'current_stock'])->name('warehouse.stock_details.current_stock');
    Route::get('stock_details/current_stock_datatable', [StockDetailsController::class, 'current_stock_datatable'])->name('warehouse.stock_details.current_stock_datatable');

    // Policy
    Route::get('policy', [PolicyController::class, 'index'])->name('admin.policy.index');
    Route::get('policy/datatable', [PolicyController::class, 'datatable'])->name('admin.policy.datatable');
    Route::post('policy/store', [PolicyController::class, 'store'])->name('admin.policy.store');
    Route::get('policy/edit', [PolicyController::class, 'edit'])->name('admin.policy.edit');
    Route::get('policy/delete/{id}', [PolicyController::class, 'delete'])->name('admin.policy.delete');
    Route::get('policy/status/{id}', [PolicyController::class, 'status'])->name('admin.policy.status');
});


Route::group(['middleware' => ['auth'], 'prefix' => 'customer'], function () {

    Route::get('dashboard', [CustomerDashboardController::class, 'dashboard'])->name('customer.dashboard');
    Route::get('profile_edit', [CustomerDashboardController::class, 'profile_edit'])->name('customer.profile_edit');
    Route::post('profile_update', [CustomerDashboardController::class, 'profile_update'])->name('customer.profile_update');
    Route::get('order', [CustomerDashboardController::class, 'order'])->name('customer.order');
    Route::get('rental_order', [CustomerDashboardController::class, 'rental_order'])->name('customer.rental_order');
    Route::post('rental_order/extend', [CustomerDashboardController::class, 'rental_order_extend'])->name('customer.rental_order.extend');
    Route::get('order/show/{id}', [CustomerDashboardController::class, 'order_show'])->name('customer.order.show');
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('cart', [FrontController::class, 'cart'])->name('front.cart');
    Route::post('update_cart', [FrontController::class, 'update_cart'])->name('front.update_cart');
    Route::get('checkout', [FrontController::class, 'checkout'])->name('front.checkout');
    Route::post('place_order', [FrontController::class, 'place_order'])->name('front.place_order');
    Route::get('order_complete/{encoded_order_id}', [FrontController::class, 'order_complete'])->name('front.order_complete');
    Route::post('add_review', [FrontController::class, 'add_review'])->name('front.add_review');
    Route::get('cancel_review/{product_id}', [FrontController::class, 'cancel_review'])->name('front.cancel_review');
    Route::get('order/invoice/{id}', [CustomerDashboardController::class, 'download_invoice'])->name('front.order.invoice');
    Route::get('apply_coupon', [FrontController::class, 'apply_coupon'])->name('front.apply_coupon');
    Route::get('remove_coupon', [FrontController::class, 'remove_coupon'])->name('front.remove_coupon');
});


Route::get('about_us', [FrontController::class, 'about'])->name('front.about_us');
Route::get('contact_us', [FrontController::class, 'Contact'])->name('front.contact_us');
Route::get('shop', [FrontController::class, 'shop'])->name('front.shop');
Route::get('product/{product_slug}', [FrontController::class, 'product_details'])->name('front.product');

Route::get('blogs', [FrontController::class, 'blog'])->name('front.blog');
Route::get('blog/{slug}', [FrontController::class, 'blog_show'])->name('front.blog.show');
Route::get('p/{slug}', [FrontController::class, 'policy_page_show'])->name('front.policy_page.show');
Route::post('combo_product_add_to_cart', [FrontController::class, 'combo_product_add_to_cart'])->name('front.combo_product_add_to_cart');

Route::post('contact/insert', [ContactController::class, 'store'])->name('front.contact.insert');

// Ajax Route
Route::get('ajax/login_modal', [AjaxController::class, 'login_modal'])->name('ajax.login_modal');
Route::get('ajax/register_modal', [AjaxController::class, 'register_modal'])->name('ajax.register_modal');
Route::get('ajax/get_attribute_values', [AjaxController::class, 'get_attribute_values'])->name('ajax.get_attribute_values');
Route::get('ajax/get_product_filter', [AjaxController::class, 'get_product_filter'])->name('ajax.get_product_filter');
Route::get('ajax/quick_view_product', [AjaxController::class, 'quick_view_product'])->name('ajax.quick_view_product');
Route::get('ajax/get_combo_product_variant_data', [AjaxController::class, 'get_combo_product_variant_data'])->name('ajax.get_combo_product_variant_data');
Route::get('ajax/add_to_cart', [AjaxController::class, 'add_to_cart'])->name('ajax.add_to_cart');
Route::get('ajax/remove_from_cart', [AjaxController::class, 'remove_from_cart'])->name('ajax.remove_from_cart');
Route::get('ajax/get_rental_activity', [AjaxController::class, 'get_rental_activity'])->name('ajax.get_rental_activity');
Route::get('ajax/extend_rental_modal', [AjaxController::class, 'extend_rental_modal'])->name('ajax.extend_rental_modal');


// Temp URLs 
Route::get('update_ids_in_json_format', [HomeController::class, 'update_ids_in_json_format']);
Route::get('create_opening_stock_history', [HomeController::class, 'create_opening_stock_history']);
// product Details
// Route::view('product', 'product')->name('product-details');

// Shop Sidebar

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
