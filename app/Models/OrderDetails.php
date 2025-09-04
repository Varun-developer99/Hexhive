<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    protected $fillable = [
        'created_by_id',
        'created_by_role',
        'customer_id',
        'order_id',
        'product_id',
        'category_id',
        'sub_category_id',
        'brand_id',
        'price',
        'qty',
        'total_amount',
        'tax_rate',
        'tax_amount',
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
    public function sub_category()
    {
        return $this->belongsTo('App\Models\SubCategory', 'sub_category_id', 'id');
    }
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand', 'brand_id', 'id');
    }
    // public function created_by()
    // {
    //     return $this->belongsTo(User::class, 'created_by_id')->where('created_by_role', 'Customer');
    // }
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }

    protected $appends = ['product', 'category', 'sub_category', 'brand', 'customer'];

    public function getProductAttribute()
    {
        return $this->product()->first();
    }
    public function getCategoryAttribute()
    {
        return $this->category()->first();
    }
    public function getSubCategoryAttribute()
    {
        return $this->sub_category()->first();
    }
    public function getBrandAttribute()
    {
        return $this->brand()->first();
    }
   
    public function getCustomerAttribute()
    {
        return $this->customer()->first();
    }
}
