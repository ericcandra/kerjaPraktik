<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SimpleResetController;
// use App\Http\Controllers\ForgotPasswordController;
// use App\Http\Controllers\ResetPasswordController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProdukMasukController;
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

Route::get('produk-masuk', [ProdukMasukController::class, 'index'])->name('produk-masuk.index');
Route::resource('produk-masuk', ProdukMasukController::class);


Route::get('pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
Route::resource('pelanggan', PelangganController::class);




Route::middleware('guest')->group(function () {
    // Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    // Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    // Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    // Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
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

Route::get('/forgot-password', [SimpleResetController::class, 'showEmailForm'])->name('password.request');
Route::post('/forgot-password', [SimpleResetController::class, 'checkEmail'])->name('password.check');
Route::get('/reset-password/{email}', [SimpleResetController::class, 'showResetForm'])->name('password.reset.simple');
Route::post('/reset-password', [SimpleResetController::class, 'reset'])->name('password.update.simple');


Route::controller(LoginController::class)->group(function () {
   
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); // setelah logout langsung ke halaman login
})->name('logout');
