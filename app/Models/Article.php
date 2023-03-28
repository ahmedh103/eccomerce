<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Article extends Model
{
	use HasTranslations,  HasFactory,HasSlug;

	public $translatable = ['title', 'description'];

	protected $fillable = ['title', 'description','slug', 'image', 'user_id', 'status'];

    const PATH = 'images/articles';

	public function user()
	{
		return $this->belongsTo(User::class);
	}

    public function getImageAttribute($value)
    {
        return self::PATH . DIRECTORY_SEPARATOR . $value;
    }

    /**
     * @return SlugOptions
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
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
