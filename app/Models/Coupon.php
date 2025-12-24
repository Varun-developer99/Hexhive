<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupon extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'created_by_id',
        'code',
        'discount',
        'status',
        'deleted_at',
    ];
}
