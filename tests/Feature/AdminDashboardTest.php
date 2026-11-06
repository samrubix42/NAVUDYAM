<?php

use App\Models\Contact;
use App\Models\Event;
use App\Models\JoinRequest;
use App\Models\Story;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('guest is redirected to login from admin dashboard', function () {
    $this->get('/admin')
        ->assertRedirect('/login');
});

test('authenticated admin can view dashboard with live metric counts', function () {
    $user = User::factory()->create();

    JoinRequest::create([
        'phone' => '+91 91111 00001',
        'name' => 'Join Applicant 1',
        'is_read' => false,
    ]);

    Contact::create([
        'phone' => '+91 92222 00002',
        'name' => 'Contact Inquirer 1',
        'subject' => 'Volunteering Inquiry',
        'message' => 'Want to volunteer',
        'is_read' => false,
    ]);

    Event::create([
        'title' => 'Upcoming Robotics Workshop',
        'description' => 'Hands on robotics session',
        'event_date' => now()->addDays(5)->toDateString(),
        'location' => 'Nagpur',
        'is_active' => true,
    ]);

    Story::create([
        'title' => 'From Classroom to Company',
        'description' => 'A journey of a rural entrepreneur',
        'is_active' => true,
    ]);

    $this->actingAs($user)
        ->get('/admin')
        ->assertStatus(200)
        ->assertSee('Dashboard')
        ->assertSee('Join Applications')
        ->assertSee('Total Inquiries')
        ->assertSee('Join Applicant 1')
        ->assertSee('Volunteering Inquiry')
        ->assertSee('Upcoming Robotics Workshop');
});
