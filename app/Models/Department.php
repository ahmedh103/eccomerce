<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Department extends Model
{
    use HasFactory,  HasTranslations, HasSlug;
    protected $fillable =['name','slug','image'];
    public array $translatable =['name'] ;

    const PATH = 'images/departmentImages';

    public function getImageAttribute($value)
    {
       return asset($this::PATH . DIRECTORY_SEPARATOR . $value);
    }


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
