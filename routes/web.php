<?php

use App\Livewire\Pages\Home;
use App\Livewire\Pages\Login;
use App\Livewire\Pages\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', Home::class);

// TODO
// nanti route login, register, auth beserta anak2nya bikin kyk dibawah ini!!!!
Route::name('login')->get('/login', Login::class);

Route::name('register.')->prefix('/register')->group(function () {
    Route::get('/', Register::class);
});


// Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
// Route::post('/register', [AuthController::class, 'register'])->middleware('throttle:5,1')->name('register.sendlink');
// Route::get('/register/verify', [AuthController::class, 'verifyLink'])->name('register.verify');

// Route::get('/login', [AuthController::class, 'showLoginForm']);
// Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:5,1')->name('login');


// Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])->name('forgot.password');
// Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->middleware('throttle:5,1')->name('forgot.password.post');

// Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('google.login');
// Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);
