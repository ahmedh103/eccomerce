<?php

namespace App\Http\Traits\Products;

use App\Models\Category;


trait ProductTrait
{


    private function getProductByCategory()
    {
        return Category::get(['id','name']);
    }


}
