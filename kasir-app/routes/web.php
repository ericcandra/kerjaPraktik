<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('view_home');
});


Route::middleware('guest')->group(function () {
    // Route::controller(RegisterController::class)->group(function () {
    //     Route::get('register', 'showRegistrationForm')->name('register');
    //     Route::post('register', 'registerUser')->name('register');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
Route::controller(LoginController::class)->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.post');    
});