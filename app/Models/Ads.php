<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class Ads extends Model
{
    use HasFactory,HasTranslations , HasSlug;

    const PATH = "images/adsImages";

    protected $fillable = ['name','city','image','slug','user_id','category_id','type','status','price','description'];

    public  $translatable = ["name"];

    public function getImageAttribute($value): string
    {
        return $this::PATH . DIRECTORY_SEPARATOR . $value;
    }

    public function getCreatedAtAttribute($date) : string {
        $customDate = new Carbon($date);
        return $customDate->diffForHumans();
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->usingSeparator('_')
            ->saveSlugsTo('slug');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function getRouteKeyName(): string
    {
        return 'slug';
    }


}
