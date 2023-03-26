<?php
namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\AdsInterface;
use App\Http\Requests\User\AdsStore;
use App\Http\Traits\ImageTrait;
use App\Models\Ads;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdsRepository implements AdsInterface{
use ImageTrait;

    private $categorymodel,$Adsmodel;
    public function __construct(Category $categorymodel,Ads $Adsmodel )
    {

        $this->categorymodel = $categorymodel;
        $this->Adsmodel = $Adsmodel;
    } 


    public function create (){


        $categories = $this->categorymodel::get("id","name");
        return view("Enduser.pages.ads.index",compact("categories"));


    }


    public function store( $request ) { 
        DB::beginTransaction();
        $adsImage = $this->uploadImage($request->image, $this->Adsmodel::PATH);
       $this->Adsmodel::create(
        [
            'name' => ['en' => $request->name_en , 'ar' => $request->name_ar],
            "city" =>$request->city,
            'category_id' => $request->category_id,
            "price" =>$request->price,
            "description" => $request->description,
            "type" => $request->type,
            "status" =>$request->status,
            'image' => $adsImage,
            "user_id" =>Auth::user()->id
                  
        ]
       );
       DB::commit();
        toast("ads added successfully" ,"success");
        return back();
    
        
    }
}

?>