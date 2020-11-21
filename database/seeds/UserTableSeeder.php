<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@exampledomain.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Random#789'),
            'remember_token' => Str::random(10),    
        ]);
    }
}
