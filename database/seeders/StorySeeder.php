<?php

namespace Database\Seeders;

use App\Models\Story;
use Illuminate\Database\Seeder;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stories = [
            [
                'title' => 'Building Step by Step: Lessons from Launching a Local Service Venture',
                'description' => "Starting an enterprise in a smaller town brings distinct challenges: initial skepticism from customers, navigating local supply logistics, and learning to manage daily cash flow without an established safety net.\n\nThe key lesson that emerges consistently is the power of starting small and listening closely. Founders who focus on delivering one reliable service at a fair, predictable price build a loyal customer base much faster than those attempting to scale prematurely.",
                'image' => 'images/Picture3.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'The Ripple Effect of Mentorship: Why One Conversation Can Shift a Trajectory',
                'description' => "When we reflect on our own careers, most of us can pinpoint one or two pivotal conversations that provided clarity when we were confused or gave us confidence when we doubted our abilities.\n\nMentorship does not require formal lectures or grand commitments. Often, taking an hour to review a resume, share context on an unfamiliar industry, or simply listen to an aspiring professional's plan makes all the difference.",
                'image' => 'images/Picture6.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Practical Skills for Tomorrow: Bridging the Distance Between Knowledge and Work',
                'description' => 'Academic credentials provide a valuable foundation, but modern work environments demand practical problem-solving skills, basic digital literacy, and the agility to learn new tools quickly.\n\nWhether learning spreadsheet accounting, customer communication, or equipment handling, practical skills give individuals immediate confidence. They turn abstract knowledge into tangible capability.',
                'image' => 'images/Picture5.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Between Steam & Dreams®: The Craft, Dignity and Ambition Behind the Machinery',
                'description' => "Every day, in commercial facilities, hotel laundries, and local care centers, machines hum with steam and motion. Behind that equipment are operators, engineers, and entrepreneurs whose technical expertise keeps entire institutions running.\n\nBetween Steam & Dreams® is our storytelling and inspiration initiative that documents these journeys. It shines a light on the discipline of fabric care, the thermodynamics of modern washing, and the human perseverance of people who take pride in service.",
                'image' => 'images/Picture8.webp',
                'is_active' => true,
            ],
            [
                'title' => 'Journeys That Inspire: Overcoming Setbacks to Build Something Meaningful',
                'description' => 'True inspiration rarely follows a straight line. The most resonant journeys involve unexpected setbacks, failed first attempts, and the quiet determination to try again with greater insight.\n\nIn our community, we celebrate founders and learners who encountered closed doors, adapted their methods, and found creative paths forward with support from friends, mentors, and local collaborators.',
                'image' => 'images/Picture1.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Women Leading Enterprise: Transforming Family Incomes and Local Markets',
                'description' => 'Across regional towns and rural blocks, women are taking leadership in retail services, artisanal production, and food enterprises, creating stable family incomes and inspiring their neighbors.\n\nWhen women gain access to peer networks, foundational accounting skills, and supportive mentorship, their ventures consistently show strong financial prudence and long-term community benefits.',
                'image' => 'images/Picture7.jpg',
                'is_active' => true,
            ],
        ];

        foreach ($stories as $story) {
            Story::updateOrCreate(
                ['title' => $story['title']],
                $story
            );
        }
    }
}

