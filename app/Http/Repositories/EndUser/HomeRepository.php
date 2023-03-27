<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\HomeInterface;
use App\Http\Traits\AllAdsTrait;
use App\Http\Traits\ShowDepartmentTrait;
use App\Models\Ads;
use App\Models\Category;
use App\Models\Department;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class HomeRepository implements HomeInterface
{

    use AllAdsTrait , ShowDepartmentTrait;

    const TOP_CATEGORY_ADDS_NUMBER = 8;
    private $department;
    private $ad;
    private $category;

    public function __construct(Department $department, Ads $ad, Category $category)
    {
        $this->department = $department;
        $this->ad = $ad;
        $this->category = $category;
    }

    public function index():View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $ads = $this->getAllAds(8);
        $our_Recommend_ads = $this->getAllAds(4);
        $departments = $this->topCategoriesByAds();
        return view('index', compact('our_Recommend_ads', 'ads', 'departments'));
    }

}
