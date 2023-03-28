<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\ProfileSettingInterface;
use App\Http\Traits\ImageTrait;
use App\Models\Profile;

class ProfileSettingRepository implements ProfileSettingInterface
{
    use ImageTrait;

    public function __construct(Profile $profile)
    {
        $this->profileModel = $profile;
    }
    public function index()
    {
        $profile = auth()->user()->profile;
        return view('EndUser.pages.profile.setting' , compact('profile'));
    }

    public function edit($id)
    {

    }

    public function update($request)
    {
        $profile = auth()->user()->profile;
       $data =  $request->except('image' , '_token' , '_method');
        if ($request->image) {
            $data['image'] = $this->uploadImage($request->image, $this->profileModel::PATH, $profile->getRawOriginal('image'));
        }
        $profile->update($data);
        toast('Profile Updated Successfully' , 'success');
        return redirect()->route('endUser.profile.index');
    }
}
