<?php

namespace App\Console\Commands;


use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class StartProject extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:start-project';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start Project';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        Artisan::call('migrate:fresh');
        $this->info('Database Migrated Success');

        Artisan::call('db:seed');
        $this->info('Seeders Success');
        $first_name = $this->ask('Enter Your First Name');
        $last_name = $this->ask('Enter Your Last Name');
        $phone = $this->ask('Enter Your Phone');
        $email = $this->ask('Enter Your Email');
        $password = $this->secret('Enter Your Password');

       User::create([
           'first_name' => $first_name,
           'last_name' => $last_name,
           'phone' => $phone,
           'email' => $email,
           'password' => Hash::make($password),
        ]);

        $this->info('Your account Added Successfully');
        return Command::SUCCESS ;
    }
}
