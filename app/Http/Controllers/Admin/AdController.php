<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdInterface;
use App\Http\Requests\AdStoreRequest;
use App\Http\Requests\AdUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Ads;

class AdController extends Controller
{
    private $adInterface;
    public function __construct(AdInterface $adInterface){
        $this->adInterface = $adInterface;
    }
    public function index(){
        return $this->adInterface->index();
    }

    public function store(AdStoreRequest $request){
        return $this->adInterface->store($request);
    }
    public function create(){
        return $this->adInterface->create();
    }

    public function edit(Ads $ad){
        return $this->adInterface->edit($ad);
    }

    public function update(Ads $ad,AdUpdateRequest $request){
        return $this->adInterface->update($ad,$request);
    }

    public function delete(Ads $ad){
        return $this->adInterface->delete($ad);
    }
}
