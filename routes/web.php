<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LibrarianController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth']);

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

Route::resource('customers', CustomerController::class);
Route::resource('books', BookController::class);
Route::resource('librarians', LibrarianController::class);
Route::resource('orders', OrderController::class);