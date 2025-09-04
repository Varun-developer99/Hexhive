<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    protected $fillable = [
        'created_by_id',
        'created_by_role',
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
        'sub_total',
        'shipping_cost',
        'total_tax_amount',
        'discount',
        'grand_total',
        'deleted_at',
    ];

    public function order_details()
    {
        return $this->hasMany('App\Models\OrderDetails', 'order_id', 'id');
    }
}
