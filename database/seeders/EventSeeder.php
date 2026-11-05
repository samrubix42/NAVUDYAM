<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'title' => 'NAVUDYAM Learning Circle: Career & Practical Skills in a Changing Market',
                'image' => 'images/Picture6.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Experience Shared: Navigating Early Career & First Steps',
                'image' => 'images/Picture5.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'From Ideas to Enterprise: Grassroots Opportunities & Best Practices',
                'image' => 'images/Picture2.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Community & Student Dialogue: Building Aspirations Together',
                'image' => 'images/Picture7.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Leadership & Purpose: Addressing the Next Generation',
                'image' => 'images/Picture3.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Allied Industry & Trade Skills Orientation',
                'image' => 'images/Picture8.webp',
                'is_active' => true,
            ],
        ];

        foreach ($events as $event) {
            Event::updateOrCreate(
                ['title' => $event['title']],
                $event
            );
        }
    }
}
