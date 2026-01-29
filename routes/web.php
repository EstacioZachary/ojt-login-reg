<?php

use App\Http\Controllers\CraftController;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Auth\Logout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Login;


//Landing Page
Route::get('/', [CraftController::class, 'index']);

//Protected CRUD Routes for Posts
Route::middleware(['auth'])->group(function () {
    
    Route::post('/crafts', [CraftController::class, 'store']);
    Route::get('/crafts/{craft}/edit', [CraftController::class, 'edit']);
    Route::put('/crafts/{craft}', [CraftController::class, 'update']);
    Route::delete('/crafts/{craft}', [CraftController::class, 'destroy']);

});

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

    