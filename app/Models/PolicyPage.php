<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PolicyPage extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'created_by_id',
        'title',
        'slug',
        'img',
        'description',
        'status',
        'deleted_at',
    ];

    public function created_by()
    {
    	return $this->belongsTo('App\Models\User','created_by_id','id');
    }
}
