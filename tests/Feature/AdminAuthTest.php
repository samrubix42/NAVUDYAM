<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('login page can be rendered for guest', function () {
    $response = $this->get('/login');

    $response->assertStatus(200);
    $response->assertSee('Welcome back');
});

test('unauthenticated user is redirected from admin to login', function () {
    $response = $this->get('/admin');

    $response->assertRedirect('/login');
});

test('authenticated user can access admin dashboard', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get('/admin');

    $response->assertStatus(200);
    $response->assertSee('Dashboard');
    $response->assertSee('Total Inquiries');
});
