<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\EndUser\ProfileInterface;

class ProfileController extends Controller
{
    protected  $profileInterface;

    public  function  __construct(ProfileInterface $profileInterface)
    {
        $this->middleware('auth');
        $this->profileInterface = $profileInterface;
    }

    public  function  index()
    {
        return $this->profileInterface->index();
    }
}
