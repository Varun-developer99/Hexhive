<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    protected $fillable = [
        'created_by_id',
        'created_by_role',
        'user_id',
        'customer_id',
        'address_id',
        'order_no',
        'name',
        'email',
        'phone',
        'country',
        'state',
        'city',
        'address_1',
        'address_2',
        'pincode',
        'note',
        'order_status',
        'payment_method',
        'payment_status',
        'payment_id',
        'razorpay_order_id',
        'sub_total',
        'shipping_cost',
        'tax_amount',
        'discount',
        'grand_total',
        'coupon_id',
        'coupon_code',
        'deleted_at',
    ];

     public function user()
    {
    	return $this->belongsTo('App\Models\User','user_id','id');
    }
    public function order_details()
    {
        return $this->hasMany(OrderDetails::class, 'order_id', 'id');
    }
    public function order_history()
    {
        return $this->hasMany(OrderHistory::class, 'order_id', 'id')->latest();
    }
}
