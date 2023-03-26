<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\EndUser\ProfileSettingInterface;
use App\Http\Requests\ProfileRequest;

class ProfileSettingController extends Controller
{

   protected $profileSettingInterface;
    public function __construct(ProfileSettingInterface $profileSettingInterface)
    {
        $this->middleware('auth');
        $this->profileSettingInterface = $profileSettingInterface;
    }

    public function index()
    {
        return $this->profileSettingInterface->index();
    }

    public function edit()
    {
        return $this->profileSettingInterface->edit(auth()->user()->id);
    }

    public function update( ProfileRequest $request)
    {
        return $this->profileSettingInterface->update($request);
    }

}
