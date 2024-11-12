<?php

use App\Http\Controllers\SheetController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/sheet/{id}', [SheetController::class, 'show']);

require __DIR__.'/auth.php';
