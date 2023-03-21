<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Department extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable =['name','slug','image'];
    public array $translatable =['name' , 'slug'] ;

    const PATH = 'images/departmentImages';

  public function getImageAttribute($value)
    {
       return asset($this::PATH . DIRECTORY_SEPARATOR . $value);
    }


}