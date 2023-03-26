<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\AuthInterface;
use App\Models\Group;
use App\Models\User;
use App\Traits\AuthTrait;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthRepository implements AuthInterface
{
        use AuthTrait;




    public function index()
    {

        return $this->checkIsEndUserAuth();

    }

    public function login($request): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {

        $credentials = $request->only(['email', 'password']);
            if (Auth::attempt($credentials) && Auth::user()->active == 1)
        {
            toast('Welcome'. \auth()->user()->first_name, 'success');
            return redirect(route('endUser.home'));
        }

        if(Auth::user() && Auth::user()->active == 0)
        {
            $this->handle_logout();
            return redirect()->route('login')->with('invalid', 'Email Not Verified');
        }else{
            return redirect()->route('login')->with('invalid', 'Invalid Credentials');
        }

    }

    public function logout(): RedirectResponse
    {
         $this->handle_logout();
        return redirect()->route('endUser.home');
    }







}
