<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactForm extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'status',
    ];
}
