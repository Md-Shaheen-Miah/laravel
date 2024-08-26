<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\StaffController;


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



Route::get('/amenities', function () {
    return view('master-pages.amenities');
});
Route::get('/login', function () {
    return view('Auth.login');
});







Route::get('/dashboard', function () {
    return view('admin-pages.dashboard');
})->name('dashboard');



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


 

/*booking table*/
Route::get('book',[BookController::class, 'book'])->name('book'); /* form viw route */
Route::post('store',[BookController::class, 'store'])->name('store');  /*data insert  route*/
Route::get('booked',[BookController::class, 'booked']); /* table viw route */
Route::get('/bokedt/{book_id}', [BookController::class, 'update'])->name('bokedt');
Route::post('editstore',[BookController::class, 'editstore'])->name('editstore');
Route::delete('delete',[BookController::class, 'destroy'])->name('delete');    
/*booking table*/

Route::get('staff',[StaffController::class, 'staff'])->name('staff'); /* form viw route */
Route::post('store',[staffController::class, 'store'])->name('store');  /*data insert  route*/
Route::get('viewstaff',[StaffController::class, 'viewstaff']); /* table viw route */