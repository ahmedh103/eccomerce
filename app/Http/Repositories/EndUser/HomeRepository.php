<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\HomeInterface;
use App\Models\Department;
use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use App\Http\Traits\ShowDepartmentTrait;
use Illuminate\Support\Facades\DB;


class HomeRepository implements HomeInterface
{
    use ShowDepartmentTrait;


    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {

       $departments=$this->ShowDepartment();
        return view('index',compact(['departments']));
    }


}
