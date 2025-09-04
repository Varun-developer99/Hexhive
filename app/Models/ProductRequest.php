<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProductRequest extends Model implements HasMedia
{
    use InteractsWithMedia;
    // Thumbnail conversion
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
              ->width(368)  
              ->height(232)
              ->sharpen(10)
              ->format('webp');
    }

    protected $appends = ['image_url', 'thumb_url', 'gallery_urls'];

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

    public function getGalleryUrlsAttribute()
    {
        return $this->getMedia('gallery_imgs')->map(function ($media) {
            return $media->getUrl();
        })->toArray();
    }

    use SoftDeletes;
    protected $fillable = [
        'created_by_id',
        'warehouse_id',
        'brand_id',
        'category_id',
        'sub_category_id',
        'product_id',
        'code',
        'name',
        'slug',
        'unit',
        'qty',
        'prescription_required',
        'mrp_price',
        'sale_price',
        'use_case',
        'description',
        'status',
        'status_remarks',
        'deleted_at',
    ];

    
    
    public function created_by()
    {
        return $this->belongsTo('App\Models\User', 'created_by_id', 'id');
    }
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand', 'brand_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
    public function sub_category()
    {
        return $this->belongsTo('App\Models\SubCategory', 'sub_category_id', 'id');
    }
    
}
