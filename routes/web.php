<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::prefix('student')->group(function () {
    Route::get('/ranjit', [StudentController::class, 'ranjit'])->name('student.ranjit');
    Route::get('/salok', [StudentController::class, 'salok'])->name('student.salok');
    Route::get('/rohan', [StudentController::class, 'rohan'])->name('student.rohan');
    Route::get('/rupesh', [StudentController::class, 'rupesh'])->name('student.rupesh');
    Route::get('/prabin', [StudentController::class, 'prabin'])->name('student.prabin');
    Route::get('/suhana', [StudentController::class, 'suhana'])->name('student.suhana');
    Route::get('/adish', [StudentController::class, 'adish'])->name('student.adish');
    Route::get('/aman', [StudentController::class, 'aman'])->name('student.aman');
});



// use App\Http\Controllers\CollegueController;

// Route::get('/collegue', [CollegueController::class, 'showByPhone']);

// // Home route
// Route::get('/', [RohanController::class, 'home'])->name('home');

// // About route
// Route::get('/about', [RohanController::class, 'about'])->name('about');

// // Login route
// Route::get('/login', [RohanController::class, 'login'])->name('login');
// // Register route
// Route::get('/register', [RohanController::class, 'register'])->name('register');

// // Contact route
// Route::get('/contact', [RohanController::class, 'contact'])->name('contact');
// // Team route
// Route::get('/team', [RohanController::class, 'team'])->name('team');



