<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderHistory extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'created_by_id',
        'order_id',
        'order_status',
        'date',
        'remarks',
        'deleted_at',
    ];

    public function created_by()
    {
    	return $this->belongsTo('App\Models\User','created_by_id','id');
    }
    public function order()
    {
    	return $this->belongsTo('App\Models\Order','order_id','id')->withTrashed();
    }
}
