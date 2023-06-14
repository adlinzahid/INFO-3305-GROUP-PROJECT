<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingsController;

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
    return view('mainpage');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/profile', function () {
    return view('profile');
});

// Route::get('/listbooking', function () {
//     return view('listbooking');
// });

Route::get('listbooking', [BookingsController::class, 'index']);
// Route::resource('booking',BookingController::class);

Route::post('addbooking', [BookingsController::class, 'store']);
