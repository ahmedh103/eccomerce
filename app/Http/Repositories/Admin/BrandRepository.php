<?php

namespace App\Http\Repositories\Admin;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class BrandRepository implements \App\Http\Interfaces\Admin\BrandInterface
{
    private $brandModel, $categoryModel;

    public function __construct(Brand $brand, Category $category)
    {
        $this->brandModel = $brand;
        $this->categoryModel = $category;
    }

    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $brands = $this->brandModel::get();
        return view('Admin.pages.brand.index', get_defined_vars());
    }

    public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $categories = $this->categoryModel::get(['id', 'name']);
        return \view('Admin.pages.brand.create', compact('categories'));
    }

    public function store($request)
    {
        $brand = $this->brandModel::create([
           'name' => ['en' => $request->name_en, 'ar' => $request->name_ar]
        ]);

        $brand->categories()->attach($request->category);
        toast('success', 'success');
        return redirect(route('admin.brand.index'));
    }

    public function edit($brand)
    {
        $categories = $this->categoryModel::get(['id', 'name']);
        return \view('Admin.pages.brand.update', compact('categories', 'brand'));
    }

    public function update($request, $brand)
    {
        $brand->update([
            'name' => ['en' => e($request->name_en), 'ar' => e($request->name_ar)]
        ]);

        $brand->categories()->sync($request->category);
        toast('success', 'success');
        return redirect(route('admin.brand.index'));
    }

    public function destroy($brand)
    {
        $brand->delete();
        $brand->categories()->detach();
        toast('success', 'success');
        return back();
    }
}
