<?php

namespace App\Http\Interfaces\Admin;

interface ProductInterface
{
    public function index();
    public function create();
    public function store($request);
    public function editForm($product);
    public function update($request, $product);
    public function delete($product);
}
