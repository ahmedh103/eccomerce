<?php

namespace App\Http\Traits;

use App\Models\Ads;

trait AllAdsTrait
{
    public function getAllAds($count){
        return Ads::inRandomOrder()->limit($count)->get(['name','city','description','type','status','price','image','slug']);
    }

    private function topCategoriesByAds()
    {
        $departments = $this->department->with('categories')->inRandomOrder()
            ->limit(self::TOP_CATEGORY_ADDS_NUMBER)->get();
        $departments = $this->mappingDepartmentAndCategoryToAddAddsCount($departments);
        return $departments;
    }

    private function mappingDepartmentAndCategoryToAddAddsCount($departments)
    {
        $departments->map(function ($department) {
            // get all ads for each category that has relation with ads
            $department->categories->map(function ($category) {
                // get all ads count for each category
                $category->ads_count = $category->ads->count();
            });
            // get all ads count for each department
            $department->ads_count = $department->categories->sum('ads_count');
        });
        return $departments;
    }
}
