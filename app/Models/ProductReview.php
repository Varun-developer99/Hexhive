<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductReview extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'created_by_id',
        'user_id',
        'product_id',
        'rate',
        'title',
        'comment',
        'status',
        'deleted_at',
    ];

    public function created_by()
    {
    	return $this->belongsTo('App\Models\User','created_by_id','id');
    }
    public function user()
    {
    	return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function product()
    {
    	return $this->belongsTo('App\Models\Product','product_id','id');
    }
}
