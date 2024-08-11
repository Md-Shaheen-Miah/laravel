<?php

use Illuminate\Support\Facades\Route
use App\Http\Controllers\BookController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', function () {
    return view('book');
});

Route::get('/books', [BookController::class, 'view']);
