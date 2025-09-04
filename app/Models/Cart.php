<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    protected $fillable = [
        'created_by_id',
        'created_by_role',
        'customer_id',
        'product_id',
        'category_id',
        'sub_category_id',
        'brand_id',
        'pincode',
        'qty',
        'price',
        'total_amount',
        'tax_rate',
        'tax_amount',
        'prescription_required',
        'deleted_at',
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
    public function created_by()
    {
        return $this->belongsTo('App\Models\User', 'created_by_id', 'id')->where('role', '!=', 'customer');
    }
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }
    public function getTotalAmountAttribute($value)
    {
        return $value ?: 0;
    }
}
