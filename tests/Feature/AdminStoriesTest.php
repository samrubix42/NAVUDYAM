<?php

use App\Models\Story;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;

uses(RefreshDatabase::class);

test('guests are redirected away from admin stories', function () {
    $this->get('/admin/stories')
        ->assertRedirect('/login');
});

test('authenticated user can view admin stories page', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/admin/stories')
        ->assertStatus(200)
        ->assertSee('Stories')
        ->assertSee('Add Story');
});

test('opening create modal resets image and does not show preselected picture', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    Livewire::test('admin::stories')
        ->call('openCreateModal')
        ->assertSet('showModal', true)
        ->assertSet('isEditing', false)
        ->assertSet('storyId', null)
        ->assertSet('image', null)
        ->assertSet('imageUpload', null)
        ->assertSet('title', '')
        ->assertSet('description', '');
});

test('admin can create story with title and description', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    Livewire::test('admin::stories')
        ->call('openCreateModal')
        ->set('title', 'Community Grassroots Enterprise')
        ->set('description', 'This is a detailed description of an inspiring community story from the grassroots level.')
        ->set('is_active', true)
        ->call('save')
        ->assertHasNoErrors()
        ->assertSet('showModal', false)
        ->assertDispatched('toast');

    $this->assertDatabaseHas('stories', [
        'title' => 'Community Grassroots Enterprise',
        'image' => null,
        'is_active' => true,
    ]);
});

test('admin can create story with uploaded image stored in public storage disk', function () {
    Storage::fake('public');

    $user = User::factory()->create();
    $this->actingAs($user);

    $file = UploadedFile::fake()->image('story-banner.jpg');

    Livewire::test('admin::stories')
        ->call('openCreateModal')
        ->set('title', 'Empowering Local Artisans')
        ->set('description', 'How hands-on trade training transformed rural households and generated steady craft incomes.')
        ->set('imageUpload', $file)
        ->call('save')
        ->assertHasNoErrors()
        ->assertDispatched('toast');

    $story = Story::where('title', 'Empowering Local Artisans')->first();
    expect($story)->not->toBeNull();
    expect($story->image)->toStartWith('stories/');
    Storage::disk('public')->assertExists($story->image);
});

test('admin can toggle story active state', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $story = Story::create([
        'title' => 'Sample Active Story',
        'description' => 'This is an inspirational test story with adequate length for description.',
        'is_active' => true,
    ]);

    Livewire::test('admin::stories')
        ->call('toggleActive', $story->id)
        ->assertDispatched('toast');

    expect($story->fresh()->is_active)->toBeFalse();

    Livewire::test('admin::stories')
        ->call('toggleActive', $story->id);

    expect($story->fresh()->is_active)->toBeTrue();
});

test('admin can edit existing story and update title, description and image', function () {
    Storage::fake('public');

    $user = User::factory()->create();
    $this->actingAs($user);

    $oldFile = UploadedFile::fake()->image('old-story.jpg');
    $oldPath = $oldFile->store('stories', 'public');

    $story = Story::create([
        'title' => 'Original Story Title',
        'description' => 'Original description for the testing story narrative.',
        'image' => $oldPath,
        'is_active' => true,
    ]);

    $newFile = UploadedFile::fake()->image('new-story.jpg');

    Livewire::test('admin::stories')
        ->call('openEditModal', $story->id)
        ->assertSet('isEditing', true)
        ->assertSet('storyId', $story->id)
        ->assertSet('title', 'Original Story Title')
        ->assertSet('image', $oldPath)
        ->set('title', 'Updated Story Title')
        ->set('description', 'Updated description narrative that exceeds the minimum required characters.')
        ->set('imageUpload', $newFile)
        ->call('save')
        ->assertHasNoErrors()
        ->assertDispatched('toast');

    $freshStory = $story->fresh();
    expect($freshStory->title)->toBe('Updated Story Title');
    expect($freshStory->description)->toContain('Updated description narrative');
    expect($freshStory->image)->not->toBe($oldPath);
    Storage::disk('public')->assertExists($freshStory->image);
    Storage::disk('public')->assertMissing($oldPath);
});

test('admin can delete story and storage file is cleaned up', function () {
    Storage::fake('public');

    $user = User::factory()->create();
    $this->actingAs($user);

    $file = UploadedFile::fake()->image('delete-me.jpg');
    $path = $file->store('stories', 'public');

    $story = Story::create([
        'title' => 'Story To Be Deleted',
        'description' => 'This story will be removed completely from the database and storage disk.',
        'image' => $path,
        'is_active' => true,
    ]);

    Livewire::test('admin::stories')
        ->call('confirmDelete', $story->id)
        ->assertSet('showDeleteModal', true)
        ->call('delete')
        ->assertDispatched('toast');

    $this->assertDatabaseMissing('stories', ['id' => $story->id]);
    Storage::disk('public')->assertMissing($path);
});

