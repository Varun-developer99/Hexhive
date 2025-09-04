<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ComboProduct extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;

    protected $fillable = [
        'id',
        'name',
        'products',
        'status',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->sharpen(10)
            ->format('webp');
    }
    
    public function getProducts()
    {
        $productIds = json_decode($this->products, true);
        if (!is_array($productIds)) {
            return [];
        }
        $products = \App\Models\Product::whereIn('id', $productIds)->pluck('name', 'id');
        // Return array of ['id' => 'name']
        return $products->toArray();
    }

    protected $appends = ['image_url', 'thumb_url'];

    public function getImageUrlAttribute()
    {
        $media = $this->getFirstMedia('main_img');
        return $media ? $media->getUrl() : null;
    }
    
    public function getThumbUrlAttribute()
    {
        $media = $this->getFirstMedia('main_img');
        return $media ? $media->getUrl('thumb') : null;
    }

    public function products()
    {
        return $this->belongsToMany(\App\Models\Product::class, 'combo_product_id', 'product_id');
    }
}
