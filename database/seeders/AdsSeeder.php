<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0 ;$i<24 ; $i++){
            DB::table('ads')->insert([
               'name'=>"fack Name",
                'city'=>'mansora',
                'image'=>'logo.png',
                'slug'=>'fack slug',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero voluptatum repudiandae veniam maxime tenetur.',
                'user_id'=>1,
                'category_id'=>1,
                'price'=>200,
                'type'=>'new',
                'status'=>'pending'
            ]);
        }
    }
}
