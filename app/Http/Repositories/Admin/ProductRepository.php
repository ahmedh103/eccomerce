<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\ProductInterface;
use App\Models\Admin\Product;
use Illuminate\Support\Facades\Storage;

class ProductRepository implements ProductInterface
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

        $imageName =  Storage::disk('local')->put($request->image, $this->producModel::PATH);
        $this->producModel::create([
            'name' => ['en'=>$request->name_en,'ar'=>$request->name_ar],
            'slug' => ['en'=>$request->name_en,'ar'=>$request->name_ar],
            'detalis'=>['en'=>$request->detalis_en ,'ar'=>$request->detalis_ar],
            'price' => $request->price,
            'image' => $imageName
        ]);


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
