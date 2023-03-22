<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait AuthTrait
{


    public  function  checkIsAdminAuth(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        if(\auth()->user()) $this->checkGroup();
        return view('Admin.pages.Auth.login');
    }

    public  function  checkIsEndUserAuth(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        if(\auth()->user()) $this->checkGroup();
        return view('EndUser.pages.Auth.login');
    }

    public  function checkGroup()
    {
        return  auth()->user()->user_role() == 1 ? redirect(route('admin.home')) : redirect(route('endUser.home'));
    }

    public function handle_logout(): void
    {
        \session()->flush();
        Auth::logout();
    }


}
