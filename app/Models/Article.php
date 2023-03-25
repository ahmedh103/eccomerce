<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Article extends Model
{
	use HasTranslations,  HasFactory;

	public $translatable = ['title', 'description'];

	protected $fillable = ['title', 'description', 'image', 'user_id', 'status'];

    const PATH = 'images/articles';

	public function user()
	{
		return $this->belongsTo(User::class);
	}

    public function getImageAttribute($value)
    {
        return self::PATH . DIRECTORY_SEPARATOR . $value;
    }

}
