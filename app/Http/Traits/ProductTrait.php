<?php

namespace App\Http\Traits;

use App\Models\Category;

trait ProductTrait
{


    private function getProductByCategory()
    {
        return Category::get(['id', 'name']);
    }
}
