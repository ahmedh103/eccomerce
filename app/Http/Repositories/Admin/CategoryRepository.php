<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\CategoryInterface;
use App\Http\Traits\CategoryTrait;
use App\Http\Traits\ImageTrait;
use App\Http\Traits\Redis\CategoryRedis;
use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;

class CategoryRepository implements CategoryInterface
{
    use ImageTrait, CategoryRedis;

    private $categoryModel;

    public function __construct(Category $category)
    {
        $this->categoryModel = $category;
    }

    public  function index ()
    {
//        $collection = collect(['first', 'second']);
//        return $collection->toUpper();
      $categories = $this->categoryModel::with('Department')->paginate(100);
//     $categories = DB::table('categories')
//         ->join('departments', 'categories.department_id', '=', 'departments.id')
//         ->select('categories.*', 'departments.name as department_name')
//         ->paginate(100);
      return view('Admin.pages.category.index', compact('categories'));
    }
    public  function create ()
    {
        $departments =  $this->getCategoryBydepartment();

        return view('Admin.pages.category.create',compact('departments'));
    }

    public  function store ($request)
    {

        $categoryImage = $this->upload($request->image, $this->categoryModel::PATH);

         $this->categoryModel::create([
            'name'=>['en'=>$request->name_en,'ar'=>$request->name_ar],
            'department_id' =>$request->department_id,
            'image'=> $categoryImage,
            ]);
         $this->setCategoryInRedis();
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
            $categoryImage = $this->upload($request->image, $this->categoryModel::PATH, $category->getRawOriginal('image'));
        }
        $category->update([
            'name'=>['en'=>$request->name_en,'ar'=>$request->name_ar],
            'department_id' =>$request->department_id,
            'image'=> $categoryImage ?? $category->getRawOriginal('image')


            ]);
        $this->setCategoryInRedis();
        toast('Category Updated Successfully', 'success');
        return redirect(route('admin.category.index'));
    }

    public function delete($category)
    {
        $this->deleteFile($this->categoryModel::PATH . DIRECTORY_SEPARATOR . $category->getRawOriginal('image'));
        $category->delete();
//        $this->setCategoryInRedis();
        toast('Category Deleted Successfully', 'success');
        return back();
    }


}
