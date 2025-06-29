<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@hotel.com',
            'password' => Hash::make('admin123'),
            'phone' => '1234567890',
            'usertype' => 'admin',
        ]);

        // Create a regular user for testing
        User::create([
            'name' => 'User',
            'email' => 'user@hotel.com',
            'password' => Hash::make('user123'),
            'phone' => '0987654321',
            'usertype' => 'user',
        ]);
    }
} 