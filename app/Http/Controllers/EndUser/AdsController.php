<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\EndUser\AdsInterface;
use App\Http\Requests\EndUser\AdsStore;
use App\Http\Traits\CategoryTrait;
use App\Http\Traits\ImageTrait;
use App\Models\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    private $adsInterface;
    public function __construct(AdsInterface $adsInterface)
    {
        $this->adsInterface = $adsInterface;
    }

    public function index(){
        return $this->adsInterface->index();
    }

    public function create (){

        return $this->adsInterface->create();

    }
    public function store (AdsStore $request){

        return $this->adsInterface->store($request);
    }
}

