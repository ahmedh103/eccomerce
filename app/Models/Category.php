<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasTranslations, HasSlug;

    const PATH = 'images/gallery';

    public $translatable = ['name'];
    protected $fillable
        = [
            'name',
            'slug',
            'image',
            'department_id',
        ];

    public function Department()
    {

        return $this->belongsTo(Department::class);

    }

    public function ads()
    {
        return $this->hasMany(Ads::class);
    }

    public function getImageAttribute($value):string
    {
        return $this::PATH.DIRECTORY_SEPARATOR.$value;
    }

    /**
     * @return SlugOptions
     */
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

}
