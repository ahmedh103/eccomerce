<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\DepartmentInterface;
use App\Http\Requests\Admin\department\StoreDepartmentRequest;
use App\Http\Requests\Admin\department\UpdateDepartmentRequest;
use App\Http\Requests\Admin\department\UploadRequest;
use App\Models\Department;

 class DepartmentController extends Controller
{
   private $dapartmentInterface;

    public function __construct(DepartmentInterface $department)
    {
        $this->departmentInterface = $department;
    }

    public function index()
    {
        return $this->departmentInterface->index();
    }
    public function create()
    {
        return $this->departmentInterface->create();
    }
    public function store(StoreDepartmentRequest $request)
    {
        return $this->departmentInterface->store($request);
    }

    public function updateForm(Department $department)
    {
        return $this->departmentInterface->updateForm($department);
    }
    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        return $this->departmentInterface->update($request, $department);
    }

    public function delete(Department $department)
    {
        return $this->departmentInterface->delete($department);
    }

    public function exportDepartments()
    {
        return $this->departmentInterface->exportDepartments();
    }

    public function uploadPage()
    {
        return $this->departmentInterface->uploadPage();
    }

    public function upload(UploadRequest $request)
    {
        return $this->departmentInterface->upload($request);
    }
}
