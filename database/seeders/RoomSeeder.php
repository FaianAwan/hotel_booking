<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                'room_title' => 'Deluxe King Suite',
                'description' => 'Experience luxury in our spacious Deluxe King Suite featuring a king-size bed, elegant furnishings, and stunning city views. This suite includes premium amenities, a separate living area, and a marble bathroom with rain shower.',
                'price' => 299.99,
                'wifi' => 'yes',
                'room_type' => 'Suite',
                'image' => '1750423750.jpg'
            ],
            [
                'room_title' => 'Executive Business Room',
                'description' => 'Perfect for business travelers, our Executive Business Room offers a comfortable workspace, high-speed internet, and modern amenities. Features a queen-size bed and ergonomic office chair.',
                'price' => 199.99,
                'wifi' => 'yes',
                'room_type' => 'Business',
                'image' => '1750423722.jpg'
            ],
            [
                'room_title' => 'Family Deluxe Room',
                'description' => 'Spacious family room with two queen beds, perfect for families or groups. Features a large bathroom, comfortable seating area, and plenty of storage space. Includes child-friendly amenities.',
                'price' => 249.99,
                'wifi' => 'yes',
                'room_type' => 'Family',
                'image' => '1750423672.jpg'
            ],
            [
                'room_title' => 'Premium Ocean View',
                'description' => 'Breathtaking ocean views from this premium room featuring a king-size bed and private balcony. Enjoy the sound of waves and spectacular sunsets from your private outdoor space.',
                'price' => 399.99,
                'wifi' => 'yes',
                'room_type' => 'Premium',
                'image' => '1750422924.PNG'
            ],
            [
                'room_title' => 'Cozy Standard Room',
                'description' => 'Comfortable and affordable standard room with a queen-size bed, perfect for solo travelers or couples. Features modern amenities and a clean, minimalist design.',
                'price' => 149.99,
                'wifi' => 'yes',
                'room_type' => 'Standard',
                'image' => '1750421619.jfif'
            ],
            [
                'room_title' => 'Luxury Presidential Suite',
                'description' => 'Our most exclusive accommodation featuring multiple rooms, a private terrace, and panoramic city views. Includes a separate living room, dining area, and luxury bathroom with jacuzzi.',
                'price' => 599.99,
                'wifi' => 'yes',
                'room_type' => 'Presidential',
                'image' => '1750421587.PNG'
            ],
            [
                'room_title' => 'Garden View Room',
                'description' => 'Peaceful room overlooking our beautiful gardens. Features a queen-size bed, private balcony, and serene atmosphere. Perfect for nature lovers seeking tranquility.',
                'price' => 179.99,
                'wifi' => 'yes',
                'room_type' => 'Garden',
                'image' => '1750419009.jpg'
            ],
            [
                'room_title' => 'Modern Studio Apartment',
                'description' => 'Contemporary studio apartment with open-plan design, kitchenette, and living area. Perfect for extended stays with all the comforts of home.',
                'price' => 229.99,
                'wifi' => 'yes',
                'room_type' => 'Studio',
                'image' => '1750418816.jpg'
            ],
            [
                'room_title' => 'Classic Twin Room',
                'description' => 'Traditional twin room with two single beds, ideal for friends or colleagues traveling together. Features classic decor and comfortable amenities.',
                'price' => 169.99,
                'wifi' => 'yes',
                'room_type' => 'Twin',
                'image' => '1750410928.PNG'
            ],
            [
                'room_title' => 'Accessible Deluxe Room',
                'description' => 'Specially designed accessible room with wide doorways, roll-in shower, and grab bars. Features a king-size bed and all standard amenities for comfortable accommodation.',
                'price' => 219.99,
                'wifi' => 'yes',
                'room_type' => 'Accessible',
                'image' => '1750410878.PNG'
            ],
            [
                'room_title' => 'Honeymoon Suite',
                'description' => 'Romantic honeymoon suite with king-size bed, private balcony, and special amenities. Features elegant decor, champagne service, and romantic atmosphere.',
                'price' => 349.99,
                'wifi' => 'yes',
                'room_type' => 'Honeymoon',
                'image' => '1750402856.PNG'
            ]
        ];

        foreach ($rooms as $room) {
            Room::create($room);
        }

        $this->command->info('Rooms seeded successfully!');
    }
} 