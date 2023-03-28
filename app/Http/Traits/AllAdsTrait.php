<?php

namespace App\Http\Traits;

use App\Models\Ads;

trait AllAdsTrait
{
    public function getAllAds($count){
        return Ads::inRandomOrder()->limit($count)->get(['name','city','description','type','status','price','image','slug']);
    }

    public function getPopularTrendingAds ($count) {
        return Ads::inRandomOrder()->limit($count)->with(["category"])->get();
    }
    private function topCategoriesByAds()
    {
        $departments = $this->department->with('categories')->inRandomOrder()
            ->limit(self::TOP_CATEGORY_ADDS_NUMBER)->get();
        $departments = $this->mappingDepartmentAndCategoryToAddAddsCount($departments);
        return $departments;
    }
   
  
    public function getTopCity(){

        $getAds = Ads::get(['image','city'])->groupBy('city');
        $results = [];
    foreach($getAds as $group) {
    $results[] = array_merge($group->first()->toArray() , ['count' =>$group->count()]);
   return $results;
}
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
