<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

     $user = User::query()->create([
            'first_name' => "admin",
            'last_name' => "admin",
            'phone' => '01000000000',
            'email' => 'admin@admin.com',
            "password" => bcrypt('123456'),
            'active' => 1,
        ]);
        $user->attachGroup(1);

        $this->command->comment('======== Information admin created ========');
        $this->command->comment('======== Information admin created ========');
    }
}
