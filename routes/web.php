<?php

use App\Http\Controllers\CraftController;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Auth\Logout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Login;

// Landing Page
Route::get('/', function () {
    return view('landing'); // Landing page
});

// Feed page (everyone can see)
Route::get('/feed', [CraftController::class, 'index'])->name('feed');

// Protected CRUD Routes for Posts
Route::middleware(['auth'])->group(function () {
    Route::post('/crafts', [CraftController::class, 'store']); // Only logged-in users can post
    Route::get('/crafts/{craft}/edit', [CraftController::class, 'edit']);
    Route::put('/crafts/{craft}', [CraftController::class, 'update']);
    Route::delete('/crafts/{craft}', [CraftController::class, 'destroy']);
});

// About Page
Route::view('/about', 'about');

// Reg Routes
Route::view('/register', 'auth.register')
    ->middleware('guest')
    ->name('register');
 
Route::post('/register', Register::class)
    ->middleware('guest');

// Logout Route
Route::post('/logout', Logout::class)
    ->middleware('auth')
    ->name('logout');

// Login Routes
Route::view('/login', 'auth.login')
    ->middleware('guest')
    ->name('login');
Route::post('login', Login::class)
    ->middleware('guest');

    