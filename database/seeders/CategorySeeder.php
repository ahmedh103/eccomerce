<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0 ;$i<5000 ; $i++){
            DB::table('categories')->insert([
                'name'=>'{"en":"test","ar":"\u062a\u062c\u0631\u0628\u0647"}',
                'slug'=>'test',
                'image'=>'logo.png',
                'department_id'=>1,
            ]);
        }
    }
}
