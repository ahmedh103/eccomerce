<?php

namespace App\Http\Repositories\Admin;

use App\Exports\DepartmentExport;
use App\Http\Interfaces\Admin\DepartmentInterface;
use App\Http\Traits\ImageTrait;
use App\Imports\DepartmentImport;
use App\Models\Department;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

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

    public function exportDepartments()
    {
        return Excel::download(new DepartmentExport(), 'department.xlsx');
    }

    public function uploadPage()
    {
        return view('Admin.pages.department.uploadPage');
    }

    public function upload($request)
    {
        Excel::import(new DepartmentImport(), $request->file('file'));
        toast('success Import', 'success');
        return redirect(route('admin.department.index'));
    }
}
