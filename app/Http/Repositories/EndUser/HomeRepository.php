<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\HomeInterface;
use App\Http\Traits\AllAdsTrait;
use App\Http\Traits\ShowDepartmentTrait;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class HomeRepository implements HomeInterface
{
    use AllAdsTrait , ShowDepartmentTrait;
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $departments = $this->ShowDepartment();
        $ads = $this->getAllAds(8);
        $our_Recommend_ads =   $this->getAllAds(4);
        return view('index',compact(['departments','our_Recommend_ads', 'ads']));
    }

}
