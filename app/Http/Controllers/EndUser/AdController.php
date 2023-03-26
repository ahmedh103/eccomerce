<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\EndUser\AdsInterface;
use App\Http\Requests\EndUser\AdsStore;
use Illuminate\Http\Request;

class AdController extends Controller
{
    private $adsinterface ;
    public function __construct(AdsInterface $adsInterface)
    {
        $this->adsinterface = $adsInterface;
    }

    public function create (){

        return $this->adsinterface->create();
        
    }
    public function store (AdsStore $request){

        return $this->adsinterface->store($request);
    }
}
