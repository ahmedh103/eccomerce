<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AuthInterface;
use App\Models\User;
use App\Traits\AuthTrait;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthInterface
{
    use AuthTrait;

    public function index()
    {

      return $this->checkIsAdminAuth();

    }

    public function login($request): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials) && Auth::user()->user_role() == 1  )
        {
            toast('Welcome '. \auth()->user()->first_name, 'success');
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
        $this->handle_logout();
        return redirect(route('admin.login'));
    }




}
