<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Policy extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'created_by_id',
        'title',
        'slug',
        'description',
        'is_featured',
        'status',
    ];
}
