<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\DepartmentInterface;
use App\Http\Traits\ImageTrait;
use App\Models\Department;
use Illuminate\Support\Facades\Storage;

class DepartmentRepository implements DepartmentInterface
{

   use ImageTrait;
   private $departmentModel;

   public function __construct(Department $department)
   {
       $this->departmentModel=$department;
   }

    public function index()
    {

       $departments=$this->departmentModel::get (['id','name','slug','image']);
       return view('Admin.pages.department.index',compact('departments'));
    }

    public function create()
    {
       return view('Admin.pages.department.create');
    }

    public function store($request)
    {

         $departmentImage = $this->uploadImage($request->image, $this->departmentModel::PATH);

         $this->departmentModel::create([
            'name'=>['en'=>$request->name_en,'ar'=>$request->name_ar],
            'image'=>$departmentImage
             ]);
            toast('Department Created successfully', 'success');
          return redirect(route('admin.department.index'));

    }

    public function updateForm($department)
    {
        return view("Admin.pages.department.update",compact('department'));
    }

    public function update($request, $department)
    {
          if ($request->image) {

              $imageName = $this->uploadImage($request->image, $this->departmentModel::PATH, $department->getRawOriginal('image'));
        }

        $department->update([
            'name'=>['en'=>$request->name_en,'ar'=>$request->name_ar],
            'image' => $imageName ?? $department->getRawOriginal('image'),
        ]);

        toast('department updated successfully','success');

        return redirect()->route('admin.department.index');
    }

    public function delete($department)
    {
        Storage::delete($department->image);
       $department->delete();
        toast('department Deleted Successfully', 'success');
        return back();
    }
}
