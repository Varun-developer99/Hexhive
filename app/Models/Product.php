<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia
{
    use InteractsWithMedia;
    // Thumbnail conversion
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
              ->width(368)  
              ->height(232)
              ->sharpen(10)
              ->format('webp'); // Ensure the format is set to .webp
    }

    protected $appends = ['image_url', 'thumb_url', 'gallery_urls', 'current_stock','product_benefits_img', 'category_name'];

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

    public function getProductBenefitsImgAttribute()
    {
        return $this->getMedia('product_benefits_img')->map(function ($media) {
            return $media->getUrl();
        })->toArray();
    }

    public function getCurrentStockAttribute()
    {
        $in =  $this->stock_details()->where('in_out', 'In')->sum('qty');
        $out =  $this->stock_details()->where('in_out', 'Out')->sum('qty');
        return $in - $out;
    }

    public function getCategoryNameAttribute()
    {
        return $this->category->name ?? 'N/A';
    }


    use SoftDeletes;
    protected $fillable = [
        'created_by_id',
        'code',
        'sku',
        'brand_id',
        'category_id',
        'name',
        'slug',
        'casepack',
        'quantity',
        'mrp_price',
        'sale_price',
        'hsn_code',
        'gst_rate',
        'product_weight',
        'length',
        'width',
        'height',
        'product_shelf_life',
        'ingredients',
        'allergent_info',
        'bottel_type',
        'status',
        'is_featured',
        'is_trending',
        'enable_product_benefits',
        'enable_product_features',
        'product_benefits_img',
        'short_description',
        'description',
        'deleted_at',
    ];

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
    public function stock_details()
    {
        return $this->hasMany('App\Models\StockDetails', 'product_id', 'id');
    }
    
    public function productfeatures()
    {
        return $this->hasMany('App\Models\ProductFeatures', 'product_id', 'id');
    }

}
