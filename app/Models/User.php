<?php

namespace App\Models;

// use Illuminate\Contracts\auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    const PATH = 'images/users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'password',
    ];


    public static $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:users',
        'phone' => 'required|unique:users,phone',
        'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        'active' => 'in:1,0',
        'password' => 'required|confirmed|min:6',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'active' => 'boolean',
    ];
    public function getImageAttribute($value): string
    {
        return asset($this::PATH . DIRECTORY_SEPARATOR . $value);
    }
    //user_groups
    public function group(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(UserGroup::class,);
    }

    public  function user_role()
    {

        return $this->group->group_id;
    }

    // attach user to group
    public function attachGroup($group_id): void
    {
        $this->group()->create([
            'group_id' => $group_id,
        ]);
    }


}
