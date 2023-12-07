<?php

use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use App\Models\Reservation;
use App\Models\Testimonials;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/Faqs', function () {
    return view('Faqs');
});
Route::get('/ContactUs', function () {
    return view('ContactUs');
});
Route::get('/Models', function () {
    return view('Models');
});
Route::get('/AboutUs', function () {
    return view('AboutUs');
});
Route::get('/Offers', function () {
    return view('Offers');
})->name('Offers');
Route::get('/Terms', function () {
    return view('Terms');
});
Route::get('/Testimonials', function () {
    return view('Testimonials');
});
Route::get('/Team', function () {
    return view('Team');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        
        return view('dashboard');
    })->name('dashboard');
    
});
/* Route::get('/home', 'HomeController@index')->name('home'); */

// Admin routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    /* Route::get('/admin', 'AdminController@index')->name('admin.dashboard'); */
    // Add other admin routes here
    Route::get('/admin',[AdminController::class, 'showdashboard'])->name('admin.dashboard');
    Route::get('/Testimonys',[TestimonialsController::class,'index'])->name('testimonys');
    Route::get('/Reservations',[ReservationController::class,'index'])->name('admin.Reserve');
    // routes/web.php
    Route::put('/reservations/{id}/approve', [ReservationController::class, 'approve'])->name('reservation.approve');
    Route::put('/reservations/{id}/decline', [ReservationController::class, 'decline'])->name('reservation.decline');

});
// User routes
Route::group(['middleware' => ['auth']], function () {
  /*   Route::get('/user', [UserController::class,'index'])->name('user.dashboard'); */
    //
    Route::get('/Reserve',[ReservationController::class,'userreserve'])->name('user.dashboard');
    // Add other user routes here
    Route::get('/Testimonials',[TestimonialsController::class,'index2'])->name('testimonials');
    Route::post('/Testimonials',[TestimonialsController::class,'store'])->name('testimony');
    // routes/web.php
    Route::get('/user/approved-reservations', [UserController::class, 'approvedReservations'])->name('user.approvedReservations');
    Route::get('/user/declined-reservations', [UserController::class, 'declinedReservations'])->name('user.declinedReservations');

// ...

Route::middleware(['auth'])->group(function () {
    Route::get('/user/approved-reservations', [ReservationController::class, 'approvedReservations'])->name('user.approvedReservations');
});

});
Route::post('/Offers',[ReservationController::class,'store'])->name('reserve');


//
Route::middleware(['auth'])->group(function () {
    Route::get('/user/reservations', [UserController::class, 'showReservations'])->name('user.reservations');
    // Add other user routes here
});