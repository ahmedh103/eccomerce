<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\ProductInterface;
use App\Http\Requests\Admin\Product\StoreRequest;


class ProductController extends Controller
{
    private $productInterface;
    public function __construct(ProductInterface $productInterface)
    {
        $this->productInterface = $productInterface;
    }

    public function index(){
        return $this->productInterface->index();
    }
    public function create(){
        return $this->productInterface->create();
    }

    public  function store(StoreRequest $request){
        return $this->productInterface->store($request);
    }
}
