<?php

namespace App\Http\Traits\Redis;

use App\Http\Traits\CategoryTrait;
use Illuminate\Support\Facades\Redis;

trait CategoryRedis
{
    use CategoryTrait;

    private function setCategoryInRedis(): bool
    {
            $redis = Redis::connection();
            $categories = $this->getAllCategory();
            $redis->set('categories', $categories);
            return true;
    }

    private function getCategoriesFromRedis()
    {
        $redis = Redis::connection();
        $data = json_decode($redis->get('{categories}'));
        return empty($data) ? $this->getAllCategory() : $data;

    }
}
