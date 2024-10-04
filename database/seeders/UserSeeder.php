<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a new user with admin privileges
        $user = [
            'role_id' => 1, // Voyager admin role_id (default is 1 for admin)
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'avatar' => 'users/default.png',
            'password' => bcrypt('password'), // Default password: "password"
            'remember_token' => \Illuminate\Support\Str::random(60),
            'email_verified_at' => now()
        ];

        // Insert the user into the database
        User::create($user);
    }
}
