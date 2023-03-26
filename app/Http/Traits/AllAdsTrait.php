<?php

namespace App\Http\Traits;

use App\Models\Ads;

trait AllAdsTrait
{
    public function getAllAds(){
        return Ads::inRandomOrder()->limit(8)->get(['name','city','description','type','status','price','image','slug']);
    }
}
