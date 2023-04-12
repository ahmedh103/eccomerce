<?php

namespace App\Http\Interfaces\Admin;

interface BrandInterface
{
    public function index();
    public function create();
    public function store($request);
    public function edit($brand);
    public function update($request, $brand);
    public function destroy($brand);
}
