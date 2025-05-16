<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PelangganController;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('view_home');
});



Route::get('kategori', [KategoriBarangController::class, 'index'])->name('kategori.index');
Route::resource('kategori', KategoriBarangController::class)->except(['show']);

Route::get('satuan', [KategoriBarangController::class, 'index'])->name('satuan.index');
Route::resource('satuan', SatuanController::class);

Route::get('barang', [KategoriBarangController::class, 'index'])->name('barang.index');
Route::resource('barang', BarangController::class);

Route::get('pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
Route::resource('pelanggan', PelangganController::class);

Route::middleware('guest')->group(function () {
    // Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    // Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    // Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
    // Route::post('/reset-password', [ForgotPasswordController::class, 'reset'])->name('password.update');
});

Route::controller(LoginController::class)->group(function () {
    // Route::get('/', [LoginController::class, ''])->name('home');
    Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
Route::controller(LoginController::class)->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.post');    
});
Route::controller(LoginController::class)->group(function () {
    Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [ForgotPasswordController::class, 'reset'])->name('password.update');  
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); // setelah logout langsung ke halaman login
})->name('logout');
