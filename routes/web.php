<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;



Route::prefix('student')->controller(StudentController::class)->group(function () {
    Route::get('ranjit', 'ranjit')->name('student.ranjit');
    Route::get('salok', 'salok')->name('student.salok');
    Route::get('rohan', 'rohan')->name('student.rohan');
    Route::get('rupesh', 'rupesh')->name('student.rupesh');
    Route::get('prabin', 'prabin')->name('student.prabin');
    Route::get('suhana', 'suhana')->name('student.suhana');
    Route::get('adish', 'adish')->name('student.adish');
    Route::get('aman', 'aman')->name('student.aman');
});






 use App\Http\Controllers\CollegueController;
use App\Http\Controllers\RohanController;

//  Route::get('/collegue', [CollegueController::class, 'showByPhone']);

// // Home route
// Route::get('/', [RohanController::class, 'home'])->name('home');

// // About route
//  Route::get('/about', [RohanController::class, 'about'])->name('about');

// // Login route
//  Route::get('/login', [RohanController::class, 'login'])->name('login');
//  // Register route
//  Route::get('/register', [RohanController::class, 'register'])->name('register');

//  // Contact route
//  Route::get('/contact', [RohanController::class, 'contact'])->name('contact');
//  // Team route
//  Route::get('/team', [RohanController::class, 'team'])->name('team');



