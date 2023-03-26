<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\HomeInterface;
use App\Http\Traits\AllAdsTrait;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class HomeRepository implements HomeInterface
{
    use AllAdsTrait;
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $ads = $this->getAllAds();
//        dd($ads);
        return view('index',['ads'=>$ads]);
    }
}
