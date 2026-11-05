<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Default Navudyam Admin Account
        User::updateOrCreate(
            ['email' => 'admin@navudyam.org'],
            [
                'name' => 'Navudyam Admin',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        // Standard Demo / Test User Account
        User::updateOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );
    }
}
