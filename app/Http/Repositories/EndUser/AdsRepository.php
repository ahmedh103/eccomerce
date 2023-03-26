<?php
namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\AdsInterface;
use App\Http\Traits\ImageTrait;
use App\Models\Ads;
use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class AdsRepository implements AdsInterface{
    use ImageTrait;

    private $categoryModel,$adsModel;
    public function __construct(Category $categoryModel, Ads $adsModel)
    {

        $this->categoryModel = $categoryModel;
        $this->adsModel = $adsModel;
    }


    public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {

        $categories = $this->categoryModel::get(['id', 'name']);
        return view("EndUser.pages.ads.index",compact("categories"));

    }


    public function store($request): RedirectResponse
    {

        $adsImage = $this->uploadImage($request->image, $this->adsModel::PATH);
        $this->adsModel::create(
            [
                'name' => ['en' => $request->name_en , 'ar' => $request->name_ar],
                "city" =>$request->city,
                'category_id' => $request->category_id,
                "price" =>$request->price,
                "description" => $request->description,
                "type" => $request->type,
                'image' => $adsImage,
                "user_id" => auth()->id()
            ]
        );

        toast("ads added successfully" ,"success");
        return back();


    }
}


