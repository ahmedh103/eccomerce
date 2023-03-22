<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\ProductInterface;
use App\Http\Traits\Products\ProductTrait;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductRepository implements ProductInterface
{
use ProductTrait;
    private $producModel;

    public function __construct(Product $product)
    {
        $this->producModel =$product;
    }


    public function index()
    {
        $products = $this->producModel::get(['id','name','slug','detalis','image','price','category_id']);

        return view('Admin.pages.products.index',['products'=>$products]);
    }

    public function create()
    {
        $categories = $this->getProductByCategory();
        return view('Admin.pages.products.create',['categories'=>$categories]);
    }

    public function store($request)
    {



        $imageName = Storage::putFile($this->producModel::PATH,$request->image);
      $product =  $this->producModel::create([
            'name' => ['en'=>$request->name_en,'ar'=>$request->name_ar],
            'detalis'=>['en'=>$request->detalis_en ,'ar'=>$request->detalis_ar],
            'price' => $request->price,
            'category_id'=>$request->category_id,
            'image' => $imageName
        ]);

        toast(__('dashboard.addProduct'), 'success');
        return redirect(route('admin.product.index'));


    }

    public function editForm($product)
    {
        $categories  = $this->getProductByCategory();
       return view('Admin.pages.products.editForm',['product'=>$product,'categories'=>$categories ]);
    }

    public function update($request, $product)
    {

        if($request->has("image")){
            Storage::delete($product->image);
            $imageName = Storage::putFile($this->producModel::PATH,$request->image);
        }

        $product->update([
            'name' => ['en'=>$request->name_en,'ar'=>$request->name_ar],
            'detalis'=>['en'=>$request->detalis_en ,'ar'=>$request->detalis_ar],
            'price' => $request->price,
            'image' => $imageName ?? $product->getRawOriginal('image')
        ]);
        toast(  (__('dashboard.editProduct')), 'success');
        return redirect(route('admin.product.index'));
    }

    public function delete($product)
    {
        $product->delete();
        toast(__('dashboard.deleteProduct'), 'success');
        return back();
    }
}
