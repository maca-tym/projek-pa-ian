<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Halaman umum
Route::get('/', function () {
    return view('welcome');
});

// Halaman dashboard user biasa, setelah login dan verified
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Halaman tentang, pelayanan, menu, kontak
Route::view('/tentang', 'tentang.tentang');
Route::view('/pelayanan', 'pelayanan.pelayanan');
Route::view('/menu', 'menu.menu');
Route::view('/kontak', 'kontak.kontak');

// Logout route
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Profile routes untuk user yang sudah login
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes admin
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');  // user dashboard
    })->name('dashboard');

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::resource('products', ProductController::class);
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
});
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Jika ada halaman superadmin, bisa pakai middleware checkRole khusus
Route::get('/superadmin-area', function () {
    return view('superadmin.page');
})->middleware('checkRole:super_admin,admin');

// Tambahan routes auth
require __DIR__.'/auth.php';
