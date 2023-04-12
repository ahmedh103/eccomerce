<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\BrandInterface;
use App\Http\Requests\Admin\Brand\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private $brandInterface;

    public function __construct(BrandInterface $brand)
    {
        $this->brandInterface = $brand;
    }

    public function index()
    {
        return $this->brandInterface->index();
    }

    public function create()
    {
        return $this->brandInterface->create();
    }

    public function store(BrandRequest $request)
    {
        return $this->brandInterface->store($request);
    }

    public function edit(Brand $brand)
    {
        return $this->brandInterface->edit($brand);
    }

    public function update(BrandRequest $request, Brand $brand)
    {
        return $this->brandInterface->update($request, $brand);
    }

    public function destroy(Brand $brand)
    {
        return $this->brandInterface->destroy($brand);
    }
}
