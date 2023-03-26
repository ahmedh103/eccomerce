<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\ProfileInterface;

class ProfileRepository implements ProfileInterface
{

    public function index()
    {
        $profile = auth()->user()->profile;
        return view('EndUser.pages.profile.index' , compact('profile'));
    }
}
