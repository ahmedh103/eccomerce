<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\RegisterInterface;
use App\Models\User;
use App\Traits\AuthTrait;


class RegisterRepository implements RegisterInterface
{
        use AuthTrait;
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        //  if(\auth()->user()) $this->checkGroup();

        return view('EndUser.pages.Auth.register');
    }

    public function register($request)
    {
        $data = $request->except(['password_confirmation' , '_token' , 'password']);
        $data['password'] = bcrypt($request->password);
        $user =   User::create($data);
        $user->attachGroup(2);
        toast('User Created Successfully', 'success');
        return redirect()->route('login')->with('register', 'User Created Successfully');
    }
}
