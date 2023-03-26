<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Department extends Model
{
    use HasFactory, HasTranslations, HasSlug;

    const PATH = 'images/departmentImages';

    public array $translatable = ['name'];
    protected $fillable = ['name', 'slug', 'image'];

    public function getImageAttribute($value)
    {
        return $this::PATH.DIRECTORY_SEPARATOR.$value;
    }

    public function getSlugOptions():SlugOptions
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
    public function getRouteKeyName():string
    {
        return 'slug';
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
