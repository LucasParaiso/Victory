<?php

use App\Livewire\Campaigns;
use App\Livewire\Characters;
use App\Livewire\Profile;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/characters');

Route::get('/characters', Characters::class)
    ->middleware(['auth'])
    ->name('characters');

Route::get('/campaigns', Campaigns::class)
    ->middleware(['auth'])
    ->name('campaigns');

Route::get('/profile', Profile::class)
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
