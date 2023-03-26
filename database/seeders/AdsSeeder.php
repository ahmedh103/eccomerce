<?php

namespace Database\Seeders;

use App\Models\Ads;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ads::create([
            
            'name'=>['en' => 'ahmed' , 'ar' => 'احمد'],
            'city'=>'cairo',
            'image'=>'1679348143_MuaRyfRslB8kWSRPG7TuHHLjYCYUo1RQGKYO8KgQ.jpg',
            'category_id'=>'1',
            'user_id'=>'1',
            'price'=>'5000',
            'description'=>'aassasalsal',
            'type'=>'used',
            'status'=>'approved',
    ]);



    }
}
