<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BorrowingController;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticate']);
Route::delete('/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'register']);

Route::resource('/categories', CategoryController::class);
Route::resource('/books', BookController::class);
Route::get('/peminjaman/{buku}', [BorrowingController::class, 'pinjam']);
Route::post('/pinjam', [BorrowingController::class, 'storeBorrowing']);
Route::resource('/peminjaman', BorrowingController::class);