<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LibrarianController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailsController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('customers', CustomerController::class);
Route::resource('books', BookController::class);
Route::resource('librarians', LibrarianController::class);
Route::resource('orders', OrderController::class);
Route::resource('order-details', OrderDetailsController::class);

