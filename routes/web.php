<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PriceController;
use App\Mail\PaymentMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
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

// Route::get('/contactus', function () {
//     return view('frontend.contact');
// });

Route::get('/contactus', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('frontend.contact');

Route::get('/services', function () {
    return view('frontend.services');
});







// Mailing

Route::get('/email/{id}', [App\Http\Controllers\EmailController::class, 'email'])->name('payment.email');





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
Route::post('reservation-create', [App\Http\Controllers\ReservationController::class, 'store'])->name('reservation.store');

// Customized Reservation
Route::get('menu', [App\Http\Controllers\MenuController::class, 'create'])->name('custom.reservation');
Route::post('menu-create', [App\Http\Controllers\MenuController::class, 'store'])->name('custom.reservation.store');


// Reservation Status
Route::get('pending-reservation', [App\Http\Controllers\ReservationController::class, 'pending'])->name('reservation.pending');
Route::get('finished-reservation', [App\Http\Controllers\ReservationController::class, 'finished'])->name('reservation.finished');
Route::get('confirmed-reservation', [App\Http\Controllers\ReservationController::class, 'confirmed'])->name('reservation.confirmed');
Route::get('ongoing-reservation', [App\Http\Controllers\ReservationController::class, 'ongoing'])->name('reservation.ongoing');

// Payment Status
Route::get('pending-payment', [App\Http\Controllers\PaymentController::class, 'pending'])->name('pendingPaymentTable');
Route::get('confirmed-payment', [App\Http\Controllers\PaymentController::class, 'paymentDetails'])->name('confirmedPaymentTable');

// Payment Confirmation Page
Route::get('pending-payment{id}', [App\Http\Controllers\PaymentController::class, 'pendingPayment'])->name('payment.confirmation')->middleware('signed');
Route::get('confirm-payment{id}', [App\Http\Controllers\PaymentController::class, 'paymentForm'])->name('actual.payment');
Route::post('payment-create', [App\Http\Controllers\PaymentController::class, 'store'])->name('payment.store');




Route::PUT('/pending/{id}', [App\Http\Controllers\ReservationController::class, 'confirmReservation'])->name('confirm.reservation');
Route::PUT('/confirmed/{id}', [App\Http\Controllers\ReservationController::class, 'moveToPendingPayment'])->name('pending.payment');

// Manage Website
Route::get('fmc-gallery', [App\Http\Controllers\GalleryController::class, 'index'])->name('backend.gallery');
Route::get('fmc-package-price', [App\Http\Controllers\PriceController::class, 'index'])->name('backend.pricePackage');
Route::get('edit-price{id}', [App\Http\Controllers\PriceController::class, 'edit'])->name('backend.edit.price');
Route::get('fmc-contact', [App\Http\Controllers\ContactController::class, 'index'])->name('backend.contact');
Route::get('edit-contact{id}', [App\Http\Controllers\ContactController::class, 'edit'])->name('backend.edit.contact');
Route::patch('update-contact/{id}', [App\Http\Controllers\ContactController::class, 'update'])->name('backend.update.contact');
Route::patch('update-price/{id}', [App\Http\Controllers\PriceController::class, 'update'])->name('backend.update.price');





// Refused Reservation

Route::delete('reservation/{id}', [App\Http\Controllers\ReservationController::class, 'destroy'])->name('refuse.reservation');
Route::get('reservation/restore/{id}', [App\Http\Controllers\ReservationController::class, 'restore'])->name('restore.reservation');
Route::get('refused-reservation', [App\Http\Controllers\ReservationController::class, 'showRefused'])->name('reservation.refused');

