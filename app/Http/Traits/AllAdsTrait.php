<?php

namespace App\Http\Traits;

use App\Models\Ads;

trait AllAdsTrait
{
    public function getAllAds($count){
        return Ads::inRandomOrder()->limit($count)->get(['name','city','description','type','status','price','image','slug']);
    }
}
