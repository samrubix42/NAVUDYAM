<?php

use Illuminate\Support\Facades\Route;

// Public Website
Route::livewire('/', 'pages::home')->name('home');

// Auth Portal
Route::livewire('/login', 'auth::login')->name('login');

// Admin Panel
Route::prefix('admin')->group(function () {
    Route::livewire('/', 'admin::dashboard')->name('admin.dashboard');
});
