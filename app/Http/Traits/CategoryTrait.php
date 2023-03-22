<?php

namespace App\Http\Traits;

use App\Models\Category;
use App\Models\Department;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


trait CategoryTrait{

    private function getCategoryBydepartment()
    {
        return Department::get(['id','name']);
    }

}