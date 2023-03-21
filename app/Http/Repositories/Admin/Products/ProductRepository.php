<?php

namespace App\Http\Repositories\Admin\Products;

use App\Http\Traits\Products\ProductTrait;
use App\Models\Admin\Product;
use Illuminate\Support\Facades\Storage;

class ProductRepository implements \App\Http\Interfaces\Admin\Products\ProductInterface
{

private $producModel;

    public function __construct(Product $product)
    {
        $this->producModel =$product;
    }


    public function index()
    {
        return view('Admin.pages.products.index');
    }

    public function create()
    {
        return view('Admin.pages.products.create');
    }

    public function store($request)
    {
        $data = $request->validated();

      $imageName =  Storage::disk('local')->put($request->image, 'products');
       $this->producModel->name = ['en'=>$request->name_en,'ar'=>$request->name_ar];
       $this->producModel->slug = ['en'=>$request->name_en,'ar'=>$request->name_ar];
       $this->producModel->detalis= ['en'=>$request->detalis_en ,'ar'=>$request->detalis_ar];
       $this->producModel->price = $request->price;
        $this->producModel->image = $imageName;

        dd($this->producModel);

       // $this->producModel->save();

    }

    public function editForm($product)
    {
        // TODO: Implement editForm() method.
    }

    public function update($request, $product)
    {
        // TODO: Implement update() method.
    }

    public function delete($product)
    {
        // TODO: Implement delete() method.
    }
}
