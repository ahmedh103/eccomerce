<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;


class Product extends Model
{
    use HasFactory, HasTranslations,HasSlug;
    public $translatable = ['name','detalis'];

    const PATH = 'images/products';
    protected $fillable=[ 'name','slug','detalis','price','image','category_id' ];

    public function getImageAttribute($value)
    {
        return self::PATH . DIRECTORY_SEPARATOR. $value;
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
/**
* @return SlugOptions
*/
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }


    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
