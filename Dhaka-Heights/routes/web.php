<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master-pages.home');
});
Route::get('/home', function () {
    return view('master-pages.home');
});
Route::get('/about', function () {
    return view('master-pages.about');
});
Route::get('/contact', function () {
    return view('master-pages.contact');
});
Route::get('/feedback', function () {
    return view('master-pages.feedback');
});
Route::get('/room-details', function () {
    return view('master-pages.room-details');
});
Route::get('/room', function () {
    return view('master-pages.room');
});
Route::get('/service', function () {
    return view('master-pages.service');
});
Route::get('/testimonial', function () {
    return view('master-pages.testimonial');
});
Route::get('/view-feedback', function () {
    return view('master-pages.view-feedback');
});
Route::get('/book', function () {
    return view('master-pages.book');
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
