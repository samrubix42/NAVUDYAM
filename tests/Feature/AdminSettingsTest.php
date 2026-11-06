<?php

use App\Models\Setting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;

uses(RefreshDatabase::class);

test('guest is redirected to login from admin settings', function () {
    $this->get('/admin/settings')
        ->assertRedirect('/login');
});

test('authenticated admin can view settings page with existing settings', function () {
    $user = User::factory()->create();

    Setting::set('project_name', 'NAVUDYAM Foundation');
    Setting::set('phone', '+91 712 255 0192');
    Setting::set('whatsapp', '+91 712 255 0192');

    $this->actingAs($user)
        ->get('/admin/settings')
        ->assertStatus(200)
        ->assertSee('System Settings')
        ->assertSee('NAVUDYAM Foundation')
        ->assertSee('+91 712 255 0192');
});

test('admin can update general and contact settings', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    Livewire::test('admin::settings')
        ->set('project_name', 'NAVUDYAM Empowering Youth')
        ->set('address', 'Civil Lines, Nagpur, MH')
        ->set('phone', '+91 99999 11111')
        ->set('whatsapp', '+91 99999 22222')
        ->set('email', 'info@navudyam.org')
        ->set('facebook', 'https://facebook.com/navudyamorg')
        ->set('instagram', 'https://instagram.com/navudyamorg')
        ->set('linkedin', 'https://linkedin.com/company/navudyamorg')
        ->call('save')
        ->assertHasNoErrors()
        ->assertDispatched('toast');

    expect(Setting::get('project_name'))->toBe('NAVUDYAM Empowering Youth')
        ->and(Setting::get('address'))->toBe('Civil Lines, Nagpur, MH')
        ->and(Setting::get('phone'))->toBe('+91 99999 11111')
        ->and(Setting::get('whatsapp'))->toBe('+91 99999 22222')
        ->and(Setting::get('email'))->toBe('info@navudyam.org')
        ->and(Setting::get('facebook'))->toBe('https://facebook.com/navudyamorg')
        ->and(Setting::get('instagram'))->toBe('https://instagram.com/navudyamorg')
        ->and(Setting::get('linkedin'))->toBe('https://linkedin.com/company/navudyamorg');
});

test('project name is required and email format is validated', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    Livewire::test('admin::settings')
        ->set('project_name', '')
        ->set('email', 'invalid-email-string')
        ->call('save')
        ->assertHasErrors(['project_name', 'email']);
});

test('admin can upload new logo and favicon to public disk', function () {
    Storage::fake('public');
    $user = User::factory()->create();
    $this->actingAs($user);

    $logo = UploadedFile::fake()->image('custom-logo.png', 400, 150);
    $favicon = UploadedFile::fake()->image('custom-favicon.png', 64, 64);

    Livewire::test('admin::settings')
        ->set('logo', $logo)
        ->set('favicon', $favicon)
        ->call('save')
        ->assertHasNoErrors()
        ->assertDispatched('toast');

    $savedLogo = Setting::get('logo');
    $savedFavicon = Setting::get('favicon');

    expect($savedLogo)->not->toBeNull()
        ->and($savedFavicon)->not->toBeNull();

    Storage::disk('public')->assertExists($savedLogo);
    Storage::disk('public')->assertExists($savedFavicon);
});

test('setting model helper methods function correctly', function () {
    Setting::set('test_key', 'test_value');
    expect(Setting::get('test_key'))->toBe('test_value');
    expect(Setting::get('non_existent_key', 'default_val'))->toBe('default_val');

    Setting::setMany([
        'key1' => 'val1',
        'key2' => 'val2',
    ]);

    $all = Setting::getAllKeyValues();
    expect($all)->toHaveKey('key1')
        ->and($all['key1'])->toBe('val1')
        ->and($all['key2'])->toBe('val2');
});

