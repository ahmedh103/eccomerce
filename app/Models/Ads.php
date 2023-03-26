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
    
    protected $guarded =[];

    public  $translatable = ["name"];

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


}
