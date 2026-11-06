<?php

use App\Models\JoinRequest;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;

uses(RefreshDatabase::class);

test('guest is redirected to login from admin joins page', function () {
    $this->get('/admin/joins')
        ->assertRedirect('/login');
});

test('authenticated admin can view joins page', function () {
    $user = User::factory()->create();
    $request = JoinRequest::create([
        'phone' => '+91 98765 00001',
        'name' => 'Kavita Sharma',
        'participation_type' => 'mentor',
        'is_read' => false,
    ]);

    $this->actingAs($user)
        ->get('/admin/joins')
        ->assertStatus(200)
        ->assertSee('Join Applications')
        ->assertSee('+91 98765 00001')
        ->assertSee('Kavita Sharma');
});

test('admin can search join applications by phone, name, or city', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    JoinRequest::create([
        'phone' => '+91 91111 22222',
        'name' => 'Sunil Verma',
        'city' => 'Amravati',
        'participation_type' => 'student',
        'is_read' => false,
    ]);

    JoinRequest::create([
        'phone' => '+91 93333 44444',
        'name' => 'Meera Joshi',
        'city' => 'Nagpur',
        'participation_type' => 'entrepreneur',
        'is_read' => true,
    ]);

    Livewire::test('admin::joins')
        ->set('search', 'Sunil')
        ->assertSee('+91 91111 22222')
        ->assertDontSee('+91 93333 44444');

    Livewire::test('admin::joins')
        ->set('search', 'Nagpur')
        ->assertSee('+91 93333 44444')
        ->assertDontSee('+91 91111 22222');
});

test('admin can filter join applications by status', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    JoinRequest::create([
        'phone' => '+91 95555 66666',
        'name' => 'Unread Applicant',
        'is_read' => false,
    ]);

    JoinRequest::create([
        'phone' => '+91 97777 88888',
        'name' => 'Read Applicant',
        'is_read' => true,
    ]);

    Livewire::test('admin::joins')
        ->set('filter', 'unread')
        ->assertSee('Unread Applicant')
        ->assertDontSee('Read Applicant');

    Livewire::test('admin::joins')
        ->set('filter', 'read')
        ->assertSee('Read Applicant')
        ->assertDontSee('Unread Applicant');
});

test('admin can filter join applications by role', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    JoinRequest::create([
        'phone' => '+91 98888 11111',
        'name' => 'Student Applicant',
        'participation_type' => 'student',
    ]);

    JoinRequest::create([
        'phone' => '+91 98888 22222',
        'name' => 'Mentor Applicant',
        'participation_type' => 'mentor',
    ]);

    Livewire::test('admin::joins')
        ->set('roleFilter', 'mentor')
        ->assertSee('Mentor Applicant')
        ->assertDontSee('Student Applicant');
});

test('viewing a join application automatically marks it as read', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $join = JoinRequest::create([
        'phone' => '+91 92222 33333',
        'name' => 'Deepak Deshmukh',
        'message' => 'Interested in incubation support.',
        'is_read' => false,
    ]);

    expect($join->fresh()->is_read)->toBeFalse();

    Livewire::test('admin::joins')
        ->call('viewRequest', $join->id)
        ->assertSet('showViewModal', true)
        ->assertSet('selectedRequestId', $join->id)
        ->assertSee('Deepak Deshmukh')
        ->assertSee('Interested in incubation support.');

    expect($join->fresh()->is_read)->toBeTrue();
});

test('admin can toggle read status of an application', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $join = JoinRequest::create([
        'phone' => '+91 94444 55555',
        'is_read' => false,
    ]);

    Livewire::test('admin::joins')
        ->call('toggleRead', $join->id)
        ->assertDispatched('toast');

    expect($join->fresh()->is_read)->toBeTrue();

    Livewire::test('admin::joins')
        ->call('toggleRead', $join->id);

    expect($join->fresh()->is_read)->toBeFalse();
});

test('admin can delete a join application', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $join = JoinRequest::create([
        'phone' => '+91 96666 77777',
        'name' => 'To Be Deleted',
    ]);

    Livewire::test('admin::joins')
        ->call('confirmDelete', $join->id)
        ->assertSet('showDeleteModal', true)
        ->assertSet('deletingRequestId', $join->id)
        ->call('delete')
        ->assertSet('showDeleteModal', false)
        ->assertDispatched('toast');

    $this->assertDatabaseMissing('join_requests', [
        'id' => $join->id,
    ]);
});
