<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Traits\ApiResponseTrait;
use App\Models\Category;
use App\Models\Department;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $pageSize = 15;
        $page = (\request()->has('page')) ? \request('page') : 1;
        $cats = new Category();
        $catsCount = $cats->count();
        $cats = $cats->skip($page * $pageSize - $pageSize);
        $cats = $cats->limit($pageSize)->get();
        $totalPages = (isset($catsCount)) ? ceil($catsCount / $pageSize) : 0 ;

        $data = [
            'categories' => $cats,
            'total_pages' => $totalPages
        ];

        if ($data)
        {
            return $this->apiResponse('200', 'Success', '', $data);
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
