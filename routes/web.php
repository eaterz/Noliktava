<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\noliktava\NoliktavaController;
use App\Http\Controllers\plaukti\PlauktiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin routes
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// Noliktava routes
Route::middleware('auth')->group(function () {

    Route::get('/noliktava/dashboard', [ProductController::class, 'index']);
    Route::post('/noliktava/store', [ProductController::class, 'store']);
    Route::put('/noliktava/update/{id}', [ProductController::class, 'update']);
    Route::delete('/noliktava/destroy/{id}', [ProductController::class, 'destroy']);


    Route::get('/noliktava/edit/{id}', [ProductController::class, 'edit'])->name('noliktava.edit');
    Route::get('/noliktava/create', [ProductController::class, 'create'])->name('noliktava.create');
    Route::post('/noliktava/create', [ProductController::class, 'store'])->name('noliktava.create');
});

// Plaukti routes
Route::middleware('auth')->group(function () {
    Route::get('/plaukti/dashboard', [PlauktiController::class, 'index'])->name('plaukti.dashboard');
});

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
