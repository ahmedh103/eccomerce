<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'company',
        'address',
        'city',
        'state',
        'post_code',
        'country',
        'phone',
        'image',
        'birth',
        'website',
    ];
    protected $hidden = [
        'user_id',
    ];
    protected $casts = [
        'birth' => 'date',
    ];
    public static $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'company' => 'nullable|string|max:255',
        'address' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        'post_code' => 'nullable|string|max:255',
        'country' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        'birth' => 'required|date',
        'website' => 'nullable|string|max:255',
    ];
    const PATH = 'images/profile';

    public function getImageAttribute($value): string
    {
        return $this::PATH . DIRECTORY_SEPARATOR . $value;
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
