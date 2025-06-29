<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Create admin user if it doesn't exist
        User::firstOrCreate(
            ['email' => 'admin@hotel.com'],
            [
                'name' => 'Admin',
                'email' => 'admin@hotel.com',
                'password' => Hash::make('admin123'),
                'phone' => '1234567890',
                'usertype' => 'admin',
                'email_verified_at' => now(),
            ]
        );

        // Create regular user if it doesn't exist
        User::firstOrCreate(
            ['email' => 'user@hotel.com'],
            [
                'name' => 'User',
                'email' => 'user@hotel.com',
                'password' => Hash::make('user123'),
                'phone' => '0987654321',
                'usertype' => 'user',
                'email_verified_at' => now(),
            ]
        );

        // Seed rooms
        $this->call(RoomSeeder::class);
        
        // Seed admin users
        $this->call(AdminUserSeeder::class);
    }
}
