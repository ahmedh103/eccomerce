<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasTranslations, HasSlug;

    const PATH = 'gallery';

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
        return env('AWS_S3_URL') . DIRECTORY_SEPARATOR. self::PATH . DIRECTORY_SEPARATOR. $value;
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

    public function brands(): BelongsToMany
    {
        return $this->belongsToMany(Brand::class, 'brand_category', 'category_id', 'brand_id');
    }

}
