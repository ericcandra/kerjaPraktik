<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('view_home');
});



Route::get('/kategori', [KategoriBarangController::class, 'index'])->name('kategori.index');
Route::resource('kategori', KategoriBarangController::class)->except(['show']);

Route::get('/satuan', [KategoriBarangController::class, 'index'])->name('satuan.index');
Route::resource('satuan', SatuanController::class);

Route::get('/barang', [KategoriBarangController::class, 'index'])->name('barang.index');
Route::resource('barang', BarangController::class);


Route::middleware('guest')->group(function () {
    // Route::controller(RegisterController::class)->group(function () {
    //     Route::get('register', 'showRegistrationForm')->name('register');
    //     Route::post('register', 'registerUser')->name('register');
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


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login'); // setelah logout langsung ke halaman login
})->name('logout');
