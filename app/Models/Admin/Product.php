<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Product extends Model
{
    use HasFactory, HasTranslations;
    public $translatable = ['name', 'detalis'];

    const PATH = 'products';
    protected $fillable=[
        'name','slug','detalis','price','image'
    ];
}
