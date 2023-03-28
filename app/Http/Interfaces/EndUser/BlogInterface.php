<?php

namespace App\Http\Interfaces\EndUser;

interface BlogInterface
{
    public function index();
    public function create();
    public function store($requset , $blog);
    public function updateForm($blog);
    public function update($requset , $blog);
    public function search($request);
}
