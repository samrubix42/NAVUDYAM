<?php

use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;

uses(RefreshDatabase::class);

test('guests are redirected away from admin events', function () {
    $this->get('/admin/events')
        ->assertRedirect('/login');
});

test('authenticated user can view admin events page', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/admin/events')
        ->assertStatus(200)
        ->assertSee('Events')
        ->assertSee('Add Event');
});

test('opening create modal resets image and does not show preselected picture', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test('admin::events')
        ->call('openCreateModal')
        ->assertSet('showModal', true)
        ->assertSet('isEditing', false)
        ->assertSet('eventId', null)
        ->assertSet('image', null)
        ->assertSet('imageUpload', null)
        ->assertSet('title', '');
});

test('admin can create event with title only', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    Livewire::test('admin::events')
        ->call('openCreateModal')
        ->set('title', 'Community Tech Workshop')
        ->set('is_active', true)
        ->call('save')
        ->assertHasNoErrors()
        ->assertSet('showModal', false)
        ->assertDispatched('toast');

    $this->assertDatabaseHas('events', [
        'title' => 'Community Tech Workshop',
        'image' => null,
        'is_active' => true,
    ]);
});

test('admin can create event with uploaded image stored in public storage disk', function () {
    Storage::fake('public');

    $user = User::factory()->create();
    $this->actingAs($user);

    $file = UploadedFile::fake()->image('workshop.jpg');

    Livewire::test('admin::events')
        ->call('openCreateModal')
        ->set('title', 'Annual Rural Innovation Meet')
        ->set('imageUpload', $file)
        ->call('save')
        ->assertHasNoErrors()
        ->assertDispatched('toast');

    $event = Event::where('title', 'Annual Rural Innovation Meet')->first();
    expect($event)->not->toBeNull();
    expect($event->image)->toStartWith('events/');
    Storage::disk('public')->assertExists($event->image);
});

test('admin can toggle event active state', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $event = Event::create([
        'title' => 'Skills Dialogue',
        'is_active' => true,
    ]);

    Livewire::test('admin::events')
        ->call('toggleActive', $event->id)
        ->assertDispatched('toast');

    expect($event->fresh()->is_active)->toBeFalse();

    Livewire::test('admin::events')
        ->call('toggleActive', $event->id);

    expect($event->fresh()->is_active)->toBeTrue();
});

test('admin can edit existing event and update title and image', function () {
    Storage::fake('public');

    $user = User::factory()->create();
    $this->actingAs($user);

    $oldFile = UploadedFile::fake()->image('old.jpg');
    $oldPath = $oldFile->store('events', 'public');

    $event = Event::create([
        'title' => 'Original Title',
        'image' => $oldPath,
        'is_active' => true,
    ]);

    $newFile = UploadedFile::fake()->image('new.jpg');

    Livewire::test('admin::events')
        ->call('openEditModal', $event->id)
        ->assertSet('isEditing', true)
        ->assertSet('eventId', $event->id)
        ->assertSet('title', 'Original Title')
        ->assertSet('image', $oldPath)
        ->set('title', 'Updated Title')
        ->set('imageUpload', $newFile)
        ->call('save')
        ->assertHasNoErrors()
        ->assertDispatched('toast');

    $freshEvent = $event->fresh();
    expect($freshEvent->title)->toBe('Updated Title');
    expect($freshEvent->image)->not->toBe($oldPath);
    Storage::disk('public')->assertExists($freshEvent->image);
    Storage::disk('public')->assertMissing($oldPath);
});

test('admin can delete event and storage file is cleaned up', function () {
    Storage::fake('public');

    $user = User::factory()->create();
    $this->actingAs($user);

    $file = UploadedFile::fake()->image('to-delete.jpg');
    $path = $file->store('events', 'public');

    $event = Event::create([
        'title' => 'Event To Delete',
        'image' => $path,
        'is_active' => true,
    ]);

    Livewire::test('admin::events')
        ->call('confirmDelete', $event->id)
        ->assertSet('showDeleteModal', true)
        ->call('delete')
        ->assertDispatched('toast');

    $this->assertDatabaseMissing('events', ['id' => $event->id]);
    Storage::disk('public')->assertMissing($path);
});

