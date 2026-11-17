<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('public pages are indexable and declare a canonical url', function () {
    $this->get(route('about'))
        ->assertOk()
        ->assertSee('<meta name="robots" content="index, follow">', false)
        ->assertSee('<link rel="canonical" href="'.route('about').'">', false);
});

test('login page is not indexable', function () {
    $this->get(route('login'))
        ->assertOk()
        ->assertSee('<meta name="robots" content="noindex, nofollow">', false);
});

test('admin pages are not indexable', function () {
    $this->actingAs(User::factory()->create())
        ->get(route('admin.dashboard'))
        ->assertOk()
        ->assertSee('<meta name="robots" content="noindex, nofollow">', false);
});

test('robots.txt blocks private areas and points to the sitemap', function () {
    $robots = file_get_contents(public_path('robots.txt'));

    expect($robots)
        ->toContain('Disallow: /admin')
        ->toContain('Disallow: /login')
        ->toContain('Sitemap: https://navudyam.com/sitemap.xml');
});

test('sitemap lists every public page and no private ones', function () {
    $response = $this->get('/sitemap.xml')
        ->assertOk()
        ->assertHeader('Content-Type', 'application/xml; charset=UTF-8');

    foreach (['home', 'about', 'initiatives', 'events', 'stories', 'contact'] as $routeName) {
        $response->assertSee('<loc>'.route($routeName).'</loc>', false);
    }

    $response->assertDontSee('/admin')->assertDontSee('/login');
});
