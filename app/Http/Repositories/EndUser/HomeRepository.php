<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\HomeInterface;
use App\Models\Ads;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class HomeRepository implements HomeInterface
{

    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $our_Recommend_ads =   Ads::inRandomOrder()->limit(4)->get(['image','description','price']);
        return view('index',compact('our_Recommend_ads'));
    }

}
