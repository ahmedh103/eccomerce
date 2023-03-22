<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\HomeInterface;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class HomeRepository implements HomeInterface
{

    public function dashboard(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Admin.index');
    }
}
