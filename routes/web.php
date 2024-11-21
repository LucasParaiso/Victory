<?php

use App\Livewire\Campaigns;
use App\Livewire\Characters;
use App\Livewire\Profile;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/characters')
    ->name('/');

Route::middleware('auth')->group(function () {
    Route::get('/characters', Characters::class)
        ->name('characters');

    Route::get('/campaigns', Campaigns::class)
        ->name('campaigns');

    Route::get('/profile', Profile::class)
        ->name('profile');
});



require __DIR__ . '/auth.php';
