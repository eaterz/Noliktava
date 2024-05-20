<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\noliktava\NoliktavaController;
use App\Http\Controllers\plaukti\PlauktiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//admin
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});



//noliktava
Route::middleware('auth')->group(function () {
    Route::get('/noliktava/dashboard', [NoliktavaController::class, 'index'])->name('noliktava.dashboard');

    Route::get('/noliktava/create', [ProductController::class, 'create'])->name('noliktava.create');
    Route::post('/noliktava/create', [ProductController::class, 'store'])->name('noliktava.dashboard');
});




//plaukti
Route::middleware('auth')->group(function () {
    Route::get('/plaukti/dashboard', [PlauktiController::class, 'index'])->name('plaukti.dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
