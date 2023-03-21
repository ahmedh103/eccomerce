<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;
  
use HasTranslations;

public $translatable = ['name','slug'];

    protected $fillable = [
        'name',
        'slug',
        'image',

    ];
    const PATH = 'images/gallery';
    public function getImageAttribute($value): string
    {
       return asset($this::PATH . DIRECTORY_SEPARATOR . $value);
    }

}
