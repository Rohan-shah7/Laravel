<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RohanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Register web routes here. Routes are assigned to the "web" middleware group.
|
*/


// Home route
Route::get('/', [RohanController::class, 'home'])->name('home');

// About route
Route::get('/about', [RohanController::class, 'about'])->name('about');

// Login route
Route::get('/login', [RohanController::class, 'login'])->name('login');
// Register route
Route::get('/register', [RohanController::class, 'register'])->name('register');

// Contact route
Route::get('/contact', [RohanController::class, 'contact'])->name('contact');
// Team route
Route::get('/team', [RohanController::class, 'team'])->name('team');

