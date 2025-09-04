<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StockDetails extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'created_by_id',
        'warehouse_id',
        'brand_id',
        'category_id',
        'sub_category_id',
        'product_id',
        'qty',
        'in_out',
        'deleted_at',
    ];
    
    public function created_by()
    {
        return $this->belongsTo('App\Models\User', 'created_by_id', 'id');
    }
    public function warehouse()
    {
        return $this->belongsTo('App\Models\User', 'warehouse_id', 'id');
    }
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand', 'brand_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
    public function sub_category()
    {
        return $this->belongsTo('App\Models\SubCategory', 'sub_category_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
   
}
