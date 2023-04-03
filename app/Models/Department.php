<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

/**
 * @method get()
 */
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

    public function categories(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Category::class);
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

    public static function sheetRules()
    {
        return [
          'name_en' => 'required|string',
          'name_ar' => 'required|string',
          'slug'    => 'required|string',
        ];
    }
}
