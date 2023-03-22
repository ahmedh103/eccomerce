<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\CategoryInterface;
use App\Http\Traits\CategoryTrait;
use App\Http\Traits\ImageTrait;
use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class CategoryRepository implements CategoryInterface
{
    use ImageTrait;
    use CategoryTrait;

    private $categoryModel;

    public function __construct(Category $category)
    {
        $this->categoryModel = $category;
    }

    public  function index ()
    {
      $categories = $this->categoryModel::get(['id', 'name','slug','image']);
      return view('Admin.pages.category.index', compact('categories'));
    }
    public  function create ()
    {
        $departments =  $this->getCategoryBydepartment();
      
        return view('Admin.pages.category.create',compact('departments'));
    }

public  function store ($request)
{
    
    $categorieImage = $this->uploadImage($request->image,$this->categoryModel::PATH);

 $this->categoryModel::create([
    'name'=>['en'=>$request->name_en,'ar'=>$request->name_ar],
    'department_id' =>$request->department_id,
    'image'=> $categorieImage,
    

    ]);

   
    toast('Category Added Successfully', 'success');
    return redirect(route('admin.category.index'));
}


public function edit($category)
{
    $departments =  $this->getCategoryBydepartment();
    return view('Admin.pages.category.update', compact('category'),compact('departments'));
}


public function update($request, $category)
{

    if ($request->image) {
        $categorieImage = $this->uploadImage($request->image, $this->categoryModel::PATH, $category->getRawOriginal('image'));
    }
    $category->update([
        'name'=>['en'=>$request->name_en,'ar'=>$request->name_ar],
        'department_id' =>$request->department_id,
        'image'=> $categorieImage ?? $category->getRawOriginal('image')
    
    
        ]);
    toast('Category Updated Successfully', 'success');
    return redirect(route('admin.category.index'));
}

    public function delete($category)
    {
        $category->delete();
        toast('Category Deleted Successfully', 'success');
        return back();
    }

  
}