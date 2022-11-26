<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/homepage', function () {
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
Route::get('/package-eight', [App\Http\Controllers\PackageController::class, 'packageEight'])->name('packageEight');
