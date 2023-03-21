<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $user = User::query()->create([
            'first_name' => "Admin",
            'last_name' => "Admin",
            'phone' => '0100000000',
            'email' => 'User@user.com',
            "password" => bcrypt('123456'),
            'active' => 1,
        ]);
        $user->attachGroup(2);


    }
}
