<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory,HasTranslations,HasSlug ;



public $translatable = ['name','slug'];

    protected $fillable = [
        'name',
        'slug',
        'image',
        'department_id'

    ];


public function Department(){

return $this->belongsTo(Department::class);

}

    const PATH = 'images/gallery';
    public function getImageAttribute($value): string
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
