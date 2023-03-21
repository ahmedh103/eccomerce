<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Ads extends Model
{
    use HasFactory,HasTranslations;

    const PATH = "adsImages";
    protected $fillable = ['name','city','image'];
    public  $translatable = ["name"];

    public function getImageAttribute($value): string
    {
        return asset($this::PATH . DIRECTORY_SEPARATOR . $value);
    }

}
