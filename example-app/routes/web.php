
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/view', function () {
//     return view('view');
// });





Route::get('/book', [BookController::class, 'book']);
Route::post('/guest', [BookController::class, 'guest'])->name('guest');
Route::get('/view', [BookController::class, 'index'])->name('view');

