
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;



Route::get('/', function () {
    return view('welcome');
});





Route::get('/book', [BookController::class, 'book']);
Route::post('/guest', [BookController::class, 'guest'])->name('guest');
Route::get('/guest', [BookController::class, 'guest']);