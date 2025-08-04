<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;





Route::prefix('student')
    ->name('student.')  // <-- route name prefix
    ->controller(StudentController::class)
    ->group(function () {
        Route::get('ranjit', 'ranjit')->name('ranjit');
        Route::get('salok', 'salok')->name('salok');

        Route::get('rupesh', 'rupesh')->name('rupesh');
        Route::get('prabin', 'prabin')->name('prabin');
        Route::get('suhana', 'suhana')->name('suhana');
        Route::get('adish', 'adish')->name('adish');
        Route::get('aman', 'aman')->name('aman');

         Route::get('rohan', 'rohan')
            ->name('rohan')
            ->middleware('rohanmiddleware');  // all lowercase, no backslash

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



