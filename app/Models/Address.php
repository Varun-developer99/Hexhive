<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'customer_id',
        'name',
        'phone',
        'address_1',
        'address_2',
        'city',
        'state',
        'country',
        'pincode',
        'landmark',
        'latitude',
        'longitude',
        'map_full_address',
        'address_type',
        'deleted_at',
    ];

    public function customer()
    {
    	return $this->belongsTo('App\Models\Customer','customer_id','id')->withTrashed();
    }

    protected $appends = ['full_address'];
    
    public function getFullAddressAttribute()
    {
        return $this->address_1 . ', ' . $this->address_2 . ', ' . $this->city . ', ' . $this->state . ', ' . $this->country . ' - ' . $this->pincode;
    }
}
