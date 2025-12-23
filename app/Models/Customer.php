<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class Customer extends Model
{
    use HasApiTokens;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'otp',
        'otp_expires_at',
        'status',
        'password',
        'show_password',
    ];

    protected $hidden = [
        'password',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
        $this->attributes['show_password'] = $value;
    }
}
