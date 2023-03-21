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
        $products = $this->producModel::get(['id','name','slug','detalis','image','price']);
        return view('Admin.pages.products.index',['products'=>$products]);
    }

    public function create()
    {

        return view('Admin.pages.products.create');
    }

    public function store($request)
    {

//        $imageName =  Storage::disk('local')->put($request->image, $this->producModel::PATH);

        $imageName = Storage::putFile($this->producModel::PATH,$request->image);
      $product =  $this->producModel::create([
            'name' => ['en'=>$request->name_en,'ar'=>$request->name_ar],
            'slug' => ['en'=>$request->name_en,'ar'=>$request->name_ar],
            'detalis'=>['en'=>$request->detalis_en ,'ar'=>$request->detalis_ar],
            'price' => $request->price,
            'image' => $imageName
        ]);

        toast(' Insreted Data  successflay', 'success');
        return redirect(route('admin.product.index'));


    }

    public function editForm($product)
    {
    $product = $this->producModel::findOrFail($product);

       return view('Admin.pages.products.editForm',['product'=>$product]);
    }

    public function update($request, $product)
    {

        if($request->has("image")){
            Storage::delete($product->image);
            $imageName = Storage::putFile($this->producModel::PATH,$request->image);
        }

        $product->update([
            'name' => ['en'=>$request->name_en,'ar'=>$request->name_ar],
            'slug' => ['en'=>$request->name_en,'ar'=>$request->name_ar],
            'detalis'=>['en'=>$request->detalis_en ,'ar'=>$request->detalis_ar],
            'price' => $request->price,
            'image' => $imageName ?? $product->getRawOriginal('image')
        ]);
        toast('Data updated successflay', 'success');
        return redirect(route('admin.product.index'));
    }

    public function delete($product)
    {
        $product->delete();
        toast('Data Deleted successflay', 'success');
        return back();
    }
}
