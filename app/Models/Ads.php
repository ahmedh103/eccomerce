<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class Ads extends Model
{
    use HasFactory,HasTranslations , HasSlug;

    const PATH = "images/adsImages";
    protected $fillable = ['name','slug','city','image','category_id','price','description','type'];

    public  $translatable = ["name",'description'];

    public function getImageAttribute($value): string
    {
        return $this::PATH . DIRECTORY_SEPARATOR . $value;
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->usingSeparator('_')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function Category(){

        return $this->belongsTo(Category::class);

    }

}
