<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('master-pages.home');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/admin', function () {
    return view('admin');
});





Route::get('/about', function () {
    return view('master-pages.about');
});

Route::get('/service', function () {
    return view('master-pages.service');
});
Route::get('/room', function () {
    return view('master-pages.room');
});

Route::get('/home', function () {
    return view('master-pages.home');
});

Route::get('/team', function () {
    return view('master-pages.team');
});
Route::get('/testimonial', function () {
    return view('master-pages.testimonial');
});
Route::get('/contact', function () {
    return view('master-pages.contact');
});

Route::get('/view-feedback', function () {
    return view('master-pages.view-feedback');
});
Route::get('/feedback', function () {
    return view('master-pages.feedback');
});

Route::get('/book', function () {
    return view('master-pages.book');
});


Route::get('/amenities', function () {
    return view('master-pages.amenities');
});
Route::get('/login', function () {
    return view('Auth.login');
});




Route::get('/booked', function () {
    return view('admin-pages.booked');
});



Route::get('/dashboard', function () {
    return view('admin-pages.dashboard');
})->name('dashboard');



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


Route::post('/store', [BookController::class, 'store'])->name('store');
Route::get('/booked', [BookController::class, 'booked']);
Route::get('/bokedt/{book_id}', [BookController::class, 'update'])->name('bokedt');
Route::put('editstore', [BookController::class, 'editstore'])->name('editstore');
Route::delete('delete', [BookController::class, 'destroy'])->name('delete');



