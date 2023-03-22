<?php

namespace App\Models\Admin;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Product extends Model
{
    use HasFactory, HasTranslations;
    public $translatable = ['name', 'detalis','slug'];

    const PATH = 'products';
    protected $fillable=[
        'name','slug','detalis','price','image','category_id'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
