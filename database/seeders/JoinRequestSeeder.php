<?php

namespace Database\Seeders;

use App\Models\JoinRequest;
use Illuminate\Database\Seeder;

class JoinRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $requests = [
            [
                'name' => 'Vikram Joshi',
                'email' => 'vikram.joshi@example.com',
                'phone' => '+91 98111 22334',
                'participation_type' => 'student',
                'city' => 'Pune',
                'affiliation' => 'alumnus',
                'affiliation_detail' => 'JNV Wardha, 2018 Batch',
                'message' => 'Interested in digital skills learning circles and internship guidance.',
                'is_read' => false,
            ],
            [
                'name' => 'Dr. Sunita Rao',
                'email' => null,
                'phone' => '+91 97222 33445',
                'participation_type' => 'mentor',
                'city' => 'Nagpur',
                'affiliation' => 'supporter',
                'affiliation_detail' => null,
                'message' => 'Available for weekend career mentoring sessions.',
                'is_read' => true,
            ],
            [
                'name' => null,
                'email' => null,
                'phone' => '+91 99333 44556',
                'participation_type' => 'entrepreneur',
                'city' => 'Wardha',
                'affiliation' => 'none',
                'affiliation_detail' => null,
                'message' => 'Looking for grassroots enterprise guidance.',
                'is_read' => false,
            ],
        ];

        foreach ($requests as $req) {
            JoinRequest::updateOrCreate(
                ['phone' => $req['phone']],
                $req
            );
        }
    }
}
