<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MenuController;

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
    return view('frontend.home');
});

Route::get('/aboutus', function () {
    return view('frontend.about');
});

Route::get('/agreements', function () {
    return view('frontend.agreement');
});

Route::get('/contactus', function () {
    return view('frontend.contact');
});

Route::get('/services', function () {
    return view('frontend.services');
});

// Route::get('/prompt', function(){
//      return view('frontend.prompt');
//  });





Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Packages Route

Route::get('/package-one', [App\Http\Controllers\PackageController::class, 'packageOne'])->name('packageOne');
Route::get('/package-two', [App\Http\Controllers\PackageController::class, 'packageTwo'])->name('packageTwo');
Route::get('/package-three', [App\Http\Controllers\PackageController::class, 'packageThree'])->name('packageThree');
Route::get('/package-four', [App\Http\Controllers\PackageController::class, 'packageFour'])->name('packageFour');
Route::get('/package-five', [App\Http\Controllers\PackageController::class, 'packageFive'])->name('packageFive');
Route::get('/package-six', [App\Http\Controllers\PackageController::class, 'packageSix'])->name('packageSix');
Route::get('/package-seven', [App\Http\Controllers\PackageController::class, 'packageSeven'])->name('packageSeven');
// Route::get('/package-eight', [App\Http\Controllers\PackageController::class, 'packageEight'])->name('packageEight');


// Reservation
Route::get('reservation', [App\Http\Controllers\ReservationController::class, 'create'])->name('reservation');
Route::post('reservation/create', [App\Http\Controllers\ReservationController::class, 'store'])->name('reservation.store');

// Customized Reservation

Route::get('menu', [App\Http\Controllers\MenuController::class, 'create'])->name('custom.reservation');
Route::post('menu/create', [App\Http\Controllers\MenuController::class, 'store'])->name('custom.reservation.store');

