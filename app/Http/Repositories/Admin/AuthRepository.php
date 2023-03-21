<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AuthInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthInterface
{

    public function index()
    {

        if( \auth()->user())
        {
            return  auth()->user()->user_role() == 1 ? redirect(route('admin.home')) : redirect(route('endUser.home'));
        }
        return view('Admin.pages.Auth.login');
    }

    public function login($request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials) && Auth::user()->user_role() == 1  )
        {
            toast('Welcome'. \auth()->user()->first_name, 'success');
            return redirect(route('admin.home'));
        }


        if ( Auth::user()  && Auth::user()->user_role() == 2)
        {
            \session()->flush();
            Auth::logout();
        }

        return redirect()->route('login')->with('invalid', 'Invalid Credentials');

    }

    public function logout()
    {
        \session()->flush();
        Auth::logout();
        return redirect(route('login'));
    }

    public function register($request)
    {
        //user registration




    }


}
