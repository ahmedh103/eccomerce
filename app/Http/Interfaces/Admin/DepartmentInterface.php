<?php

namespace App\Http\Interfaces\Admin;

    interface DepartmentInterface
    {
        public function index();
        public function create();
        public function store($request);
        public function updateForm($department);
        public function update($request, $department);
        public function delete($department);
        public function exportDepartments();
    }
