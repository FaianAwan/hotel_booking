<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;
use App\Models\Room;
use Carbon\Carbon;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = Room::all();
        
        if ($rooms->count() > 0) {
            $sampleBookings = [
                [
                    'name' => 'John Smith',
                    'email' => 'john.smith@email.com',
                    'phone' => '+1-555-0123',
                    'start_date' => Carbon::now()->addDays(5),
                    'end_date' => Carbon::now()->addDays(8),
                ],
                [
                    'name' => 'Sarah Johnson',
                    'email' => 'sarah.j@email.com',
                    'phone' => '+1-555-0456',
                    'start_date' => Carbon::now()->addDays(10),
                    'end_date' => Carbon::now()->addDays(12),
                ],
                [
                    'name' => 'Michael Brown',
                    'email' => 'michael.brown@email.com',
                    'phone' => '+1-555-0789',
                    'start_date' => Carbon::now()->addDays(15),
                    'end_date' => Carbon::now()->addDays(18),
                ],
                [
                    'name' => 'Emily Davis',
                    'email' => 'emily.davis@email.com',
                    'phone' => '+1-555-0321',
                    'start_date' => Carbon::now()->addDays(20),
                    'end_date' => Carbon::now()->addDays(22),
                ],
                [
                    'name' => 'David Wilson',
                    'email' => 'david.wilson@email.com',
                    'phone' => '+1-555-0654',
                    'start_date' => Carbon::now()->addDays(25),
                    'end_date' => Carbon::now()->addDays(28),
                ]
            ];

            foreach ($sampleBookings as $index => $bookingData) {
                $room = $rooms[$index % $rooms->count()]; // Cycle through available rooms
                
                Booking::create([
                    'room_id' => $room->id,
                    'name' => $bookingData['name'],
                    'email' => $bookingData['email'],
                    'phone' => $bookingData['phone'],
                    'start_date' => $bookingData['start_date'],
                    'end_date' => $bookingData['end_date'],
                ]);
            }

            $this->command->info('Sample bookings created successfully!');
        } else {
            $this->command->warn('No rooms found. Please create rooms first before seeding bookings.');
        }
    }
} 