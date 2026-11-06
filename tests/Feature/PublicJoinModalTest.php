<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;

uses(RefreshDatabase::class);

test('public pages include the join modal component', function () {
    $this->get('/')
        ->assertStatus(200)
        ->assertSee('Join NAVUDYAM');

    $this->get('/about')
        ->assertStatus(200)
        ->assertSee('Join NAVUDYAM');

    $this->get('/initiatives')
        ->assertStatus(200)
        ->assertSee('Join NAVUDYAM');
});

test('join modal validation requires phone and allows null email and name', function () {
    Livewire::test('public::join-modal')
        ->set('phone', '')
        ->set('email', '')
        ->set('name', '')
        ->call('submit')
        ->assertHasErrors(['phone' => 'required'])
        ->assertHasNoErrors(['email', 'name']);
});

test('join modal validates email format when email is provided', function () {
    Livewire::test('public::join-modal')
        ->set('phone', '+91 98765 43210')
        ->set('email', 'not-a-valid-email')
        ->call('submit')
        ->assertHasErrors(['email' => 'email']);
});

test('visitor can submit join application with only required phone number', function () {
    Livewire::test('public::join-modal')
        ->set('phone', '+91 99887 76655')
        ->set('name', '')
        ->set('email', '')
        ->set('city', '')
        ->set('message', '')
        ->set('participation_type', 'student')
        ->set('affiliation', 'none')
        ->call('submit')
        ->assertHasNoErrors()
        ->assertSet('submitted', true);

    $this->assertDatabaseHas('join_requests', [
        'phone' => '+91 99887 76655',
        'name' => null,
        'email' => null,
        'city' => null,
        'participation_type' => 'student',
        'affiliation' => 'none',
        'is_read' => false,
    ]);
});

test('visitor can submit join application with complete profile', function () {
    Livewire::test('public::join-modal')
        ->set('phone', '+91 91234 56780')
        ->set('name', 'Anand Kulkarni')
        ->set('email', 'anand@kulkarni.me')
        ->set('city', 'Nagpur')
        ->set('participation_type', 'mentor')
        ->set('affiliation', 'alumnus')
        ->set('affiliation_detail', 'JNV Wardha, Batch 2012')
        ->set('message', 'Would love to conduct workshops on robotics.')
        ->call('submit')
        ->assertHasNoErrors()
        ->assertSet('submitted', true);

    $this->assertDatabaseHas('join_requests', [
        'phone' => '+91 91234 56780',
        'name' => 'Anand Kulkarni',
        'email' => 'anand@kulkarni.me',
        'city' => 'Nagpur',
        'participation_type' => 'mentor',
        'affiliation' => 'alumnus',
        'affiliation_detail' => 'JNV Wardha, Batch 2012',
        'message' => 'Would love to conduct workshops on robotics.',
        'is_read' => false,
    ]);
});

test('join modal can be reset to submit another response', function () {
    Livewire::test('public::join-modal')
        ->set('phone', '+91 90000 11111')
        ->call('submit')
        ->assertSet('submitted', true)
        ->call('resetForm')
        ->assertSet('submitted', false)
        ->assertSet('phone', '')
        ->assertSet('name', '')
        ->assertSet('email', '');
});

test('join modal openModal resets submitted state for fresh submissions', function () {
    $component = Livewire::test('public::join-modal')
        ->set('phone', '+91 90000 22222')
        ->call('submit')
        ->assertSet('submitted', true);

    $component->call('openModal')
        ->assertSet('isOpen', true)
        ->assertSet('submitted', false);
});
