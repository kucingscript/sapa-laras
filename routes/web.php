<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backsite\UserController;
use App\Http\Controllers\Backsite\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('secure-admin')->name('backsite.')->middleware(['auth', 'verified'])->group(function () {
    Route::resource('dashboard', DashboardController::class);
    // Route::resource('users', UserController::class);
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
