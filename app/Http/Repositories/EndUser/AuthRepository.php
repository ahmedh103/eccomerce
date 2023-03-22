<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\AuthInterface;
use App\Models\User;
use App\Traits\AuthTrait;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthInterface
{
        use AuthTrait;

    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\Foundation\Application
    {
        return $this->checkIsEndUserAuth();

    }

    public function login($request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
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
            }


        return redirect()->route('login')->with('invalid', 'Invalid Credentials');

    }

    public function logout()
    {
         $this->handle_logout();
        return redirect()->route('endUser.home');
    }


    public function register($request)
    {
       $data = $request->except(['password_confirmation' , '_token' , 'password']);
       $data['password'] = bcrypt($request->password);
        $user =   User::create($data);
        $user->attachGroup(2);
        toast('User Created Successfully', 'success');
        return redirect()->route('login');


    }
}
