<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Traits\ApiResponseTrait;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    use ApiResponseTrait;
    public function index()
    {
        $departments = Department::get();
        if ($departments)
        {
            return $this->apiResponse('200', 'Success', '', $departments);
        }
        return $this->apiResponse('200', 'Failed', 'Data Not Found', null);

    }

    public function show($id)
    {
        $depart = Department::find($id);
        if ($depart)
        {
            return $this->apiResponse('200', 'Success', '', $depart);
        }
        return $this->apiResponse('404', 'Failed', 'Data Not Found', null);
    }
}
