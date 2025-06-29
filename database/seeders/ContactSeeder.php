<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'name' => 'John Smith',
                'email' => 'john.smith@email.com',
                'phone' => '+1-555-0123',
                'subject' => 'Room Availability Inquiry',
                'message' => 'Hello, I would like to know if you have any rooms available for the weekend of July 15-17. I need a room for 2 adults and 1 child. Please let me know about pricing and availability.',
                'status' => 'unread',
                'created_at' => now()->subDays(2),
            ],
            [
                'name' => 'Sarah Johnson',
                'email' => 'sarah.j@email.com',
                'phone' => '+1-555-0456',
                'subject' => 'Special Request for Anniversary',
                'message' => 'Hi there! My husband and I are celebrating our 10th anniversary and would like to book a romantic room. Do you offer any special packages or upgrades for anniversary celebrations? We\'re planning to stay for 3 nights in August.',
                'status' => 'read',
                'created_at' => now()->subDays(5),
            ],
            [
                'name' => 'Michael Brown',
                'email' => 'michael.brown@email.com',
                'phone' => '+1-555-0789',
                'subject' => 'Business Trip Booking',
                'message' => 'I need to book a room for a business trip next week. I\'ll be arriving on Monday and staying until Friday. Do you have any business-friendly rooms with good WiFi and a work desk? Also, what\'s your cancellation policy?',
                'status' => 'replied',
                'created_at' => now()->subDays(8),
            ],
            [
                'name' => 'Emily Davis',
                'email' => 'emily.davis@email.com',
                'phone' => '+1-555-0321',
                'subject' => 'Pet-Friendly Rooms',
                'message' => 'We\'re planning a family vacation and would like to bring our small dog. Do you have pet-friendly rooms available? What are your pet policies and any additional fees? We\'re looking to stay for 5 nights in September.',
                'status' => 'unread',
                'created_at' => now()->subHours(6),
            ],
            [
                'name' => 'David Wilson',
                'email' => 'david.wilson@email.com',
                'phone' => '+1-555-0654',
                'subject' => 'Group Booking Inquiry',
                'message' => 'I\'m organizing a family reunion and need to book multiple rooms for 12 people. We\'re looking at dates in October. Do you offer group discounts? Also, do you have any meeting spaces or common areas where we could gather?',
                'status' => 'read',
                'created_at' => now()->subDays(1),
            ],
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}
