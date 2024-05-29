<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\noliktava\NoliktavaController;
use App\Http\Controllers\plaukti\PlauktiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
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
    Route::get('/admin/users', [UsersController::class, 'index'])->name('admin.users');
    Route::get('/admin/users/create', [UsersController::class, 'create'])->name('admin.users');
    Route::post('/admin/users', [UsersController::class, 'store'])->name('admin.users');
    Route::get('/admin/users/edit/{id}', [UsersController::class, 'edit'])->name('admin.users');
    Route::patch('/admin/users', [UsersController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/edit/{id}', [UsersController::class, 'destroy'])->name('admin.users.destroy');
    Route::get('/admin/activity', [ActivityController::class, 'index'])->name('admin.activity');
});

// Noliktava routes
Route::middleware('auth')->group(function () {
    Route::get('/noliktava/dashboard', [ProductController::class, 'index'])->name('noliktava.dashboard');
    Route::get('/noliktava/orders', [OrderController::class, 'index'])->name('noliktava.orders');

    Route::get('/noliktava/ordercreate', [OrderController::class, 'create'])->name('noliktava.ordercreate');
    Route::post('/noliktava/ordercreate', [OrderController::class, 'store'])->name('noliktava.ordercreate');
    Route::post('/noliktava/orderstatus/{id}', [OrderController::class, 'finishOrder'])->name('noliktava.orderstatus');

    Route::get('/noliktava/show/{id}', [OrderController::class, 'show'])->name('noliktava.show');
    Route::get('/noliktava/add/{id}', [OrderController::class, 'add'])->name('noliktava.add');
    Route::patch('/noliktava/remove/{id}', [OrderController::class, 'remove'])->name('noliktava.remove');


    Route::patch('/noliktava/update/{id}', [ProductController::class, 'update'])->name('update');

    Route::delete('/noliktava/edit/{id}', [ProductController::class, 'delete'])->name('delete');
    Route::get('/noliktava/edit/{id}', [ProductController::class, 'edit'])->name('noliktva.edit');
    Route::get('/noliktava/create', [ProductController::class, 'create'])->name('noliktava.create');
    Route::post('/noliktava/create', [ProductController::class, 'store'])->name('noliktava.create');
    Route::get('/noliktava/activity', [ActivityController::class, 'index'])->name('noliktava.activity');
});

// Plaukti routes
Route::middleware('auth')->group(function () {
    Route::get('/plaukti/dashboard', [PlauktiController::class, 'index'])->name('plaukti.dashboard');
    Route::get('/plaukti/show/{id}', [PlauktiController::class, 'show'])->name('plaukti.show');
    Route::patch('/plaukti/add/{id}', [PlauktiController::class, 'add'])->name('plaukti.add');
    Route::patch('/plaukti/remove/{id}', [PlauktiController::class, 'remove'])->name('plaukti.remove');
    Route::get('/plaukti/activity', [ActivityController::class, 'index'])->name('plaukti.activity');
});


// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
