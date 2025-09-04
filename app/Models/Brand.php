<?php

namespace App\Models;

// use Intervention\Image\ImageManagerStatic as Image;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Brand extends Model implements HasMedia
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

    protected $appends = ['image_url', 'thumb_url', 'products_count'];

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

    use SoftDeletes;
    protected $fillable = [
        'created_by_id',
        'name',
        'slug',
        'img',
        'thumb',
        'is_featured',
        'status',
        'deleted_at',
    ];

    public function products()
    {
    	return $this->hasMany('App\Models\Product', 'brand_id', 'id')->where('status', 1);
    }
    public function featured_products()
    {
        return $this->hasMany('App\Models\Product', 'brand_id', 'id')->where('status', 1)->where('is_featured', 1);
    }

    public function getProductsCountAttribute()
    {
        return $this->products()->count();
    }
}
