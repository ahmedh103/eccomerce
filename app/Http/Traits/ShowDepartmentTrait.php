<?php

namespace App\Http\Traits;

use App\Models\Category;
use App\Models\Department;

trait ShowDepartmentTrait
{
    private $departmentModel;
    public function __construct(Department $department)
    {
        $this->departmentModel=$department;
    }

    private function ShowDepartment()
    {
        return $this->departmentModel->inRandomOrder()->limit(8)->get();
    }
}
