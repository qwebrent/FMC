<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\FeaturedClientController;
use App\Http\Controllers\MessageController;
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

Route::get('/payment-receipt', function() {
    return view('frontend.payment-receipt');
});


// Frontend

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('frontend.home');
Route::get('/aboutus', function () {
    return view('frontend.about');
});
Route::get('/agreements', function () {
    return view('frontend.agreement');
});
Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'gallery'])->name('frontend.gallery');
Route::get('/contactus', [App\Http\Controllers\ContactController::class, 'contactUs'])->name('frontend.contact');
Route::get('/services', function () {
    return view('frontend.services');
});

// Packages Route
Route::get('/package-one', [App\Http\Controllers\PackageController::class, 'packageOne'])->name('packageOne');
Route::get('/package-two', [App\Http\Controllers\PackageController::class, 'packageTwo'])->name('packageTwo');
Route::get('/package-three', [App\Http\Controllers\PackageController::class, 'packageThree'])->name('packageThree');
Route::get('/package-four', [App\Http\Controllers\PackageController::class, 'packageFour'])->name('packageFour');
Route::get('/package-five', [App\Http\Controllers\PackageController::class, 'packageFive'])->name('packageFive');
Route::get('/package-six', [App\Http\Controllers\PackageController::class, 'packageSix'])->name('packageSix');
Route::get('/package-seven', [App\Http\Controllers\PackageController::class, 'packageSeven'])->name('packageSeven');


// Reservation
Route::get('reservation', [App\Http\Controllers\ReservationController::class, 'create'])->name('reservation');
Route::post('reservation-create', [App\Http\Controllers\ReservationController::class, 'store'])->name('reservation.store');

// Customized Reservation
Route::get('menu', [App\Http\Controllers\MenuController::class, 'create'])->name('custom.reservation');
Route::post('menu-create', [App\Http\Controllers\MenuController::class, 'store'])->name('custom.reservation.store');




// Mailing

Route::get('/email/{id}', [App\Http\Controllers\EmailController::class, 'email'])->name('payment.email');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
// Reservation Status
Route::get('pending-reservation', [App\Http\Controllers\ReservationController::class, 'pending'])->name('reservation.pending');
Route::get('finished-reservation', [App\Http\Controllers\ReservationController::class, 'finished'])->name('reservation.finished');
Route::get('confirmed-reservation', [App\Http\Controllers\ReservationController::class, 'confirmed'])->name('reservation.confirmed');
Route::get('ongoing-reservation', [App\Http\Controllers\ReservationController::class, 'ongoing'])->name('reservation.ongoing');
});

Route::middleware(['auth'])->group(function () {
// Payment Status
Route::get('pending-payment', [App\Http\Controllers\PaymentController::class, 'pending'])->name('pendingPaymentTable');
Route::get('confirmed-payment', [App\Http\Controllers\PaymentController::class, 'paymentDetails'])->name('confirmedPaymentTable');
});

// Payment Confirmation Page
Route::get('pending-payment{id}', [App\Http\Controllers\PaymentController::class, 'pendingPayment'])->name('payment.confirmation')->middleware('signed');
Route::get('confirm-payment{id}', [App\Http\Controllers\PaymentController::class, 'paymentForm'])->name('actual.payment');
Route::post('payment-create', [App\Http\Controllers\PaymentController::class, 'store'])->name('payment.store');
Route::get('payment-receipt{id}', [App\Http\Controllers\PaymentController::class, 'paymentReceipt'])->name('payment.receipt');

Route::middleware(['auth'])->group(function () {
// Backend
Route::PUT('/pending/{id}', [App\Http\Controllers\ReservationController::class, 'confirmReservation'])->name('confirm.reservation');
Route::PUT('/finished/{id}', [App\Http\Controllers\ReservationController::class, 'moveToFinished'])->name('finish.reservation');
Route::PUT('/confirmed/{id}', [App\Http\Controllers\ReservationController::class, 'moveToPendingPayment'])->name('pending.payment');

});

// Manage Website Backend
Route::middleware(['auth'])->group(function () {
Route::get('fmc-gallery', [App\Http\Controllers\GalleryController::class, 'index'])->name('backend.gallery');
Route::get('fmc-package-price', [App\Http\Controllers\PriceController::class, 'index'])->name('backend.pricePackage');
Route::get('edit-price{id}', [App\Http\Controllers\PriceController::class, 'edit'])->name('backend.edit.price');
Route::get('fmc-contact', [App\Http\Controllers\ContactController::class, 'index'])->name('backend.contact');
Route::get('edit-contact{id}', [App\Http\Controllers\ContactController::class, 'edit'])->name('backend.edit.contact');
Route::patch('update-contact/{id}', [App\Http\Controllers\ContactController::class, 'update'])->name('backend.update.contact');
Route::patch('update-price/{id}', [App\Http\Controllers\PriceController::class, 'update'])->name('backend.update.price');
Route::get('fmc-featured', [App\Http\Controllers\FeaturedClientController::class, 'index'])->name('backend.featured');
Route::get('add-fmc-featured', [App\Http\Controllers\FeaturedClientController::class, 'create'])->name('backend.featured.add');
Route::post('store-fmc-featured',  [App\Http\Controllers\FeaturedClientController::class, 'store'])->name('backend.featured.store');
Route::get('edit-featured{id}', [App\Http\Controllers\FeaturedClientController::class, 'edit'])->name('backend.edit.featured');
Route::patch('update-featured/{id}', [App\Http\Controllers\FeaturedClientController::class, 'update'])->name('backend.update.featured');
Route::get('add-fmc-gallery', [App\Http\Controllers\GalleryController::class, 'create'])->name('backend.gallery.add');
Route::get('show-fmc-gallery{id}', [App\Http\Controllers\GalleryController::class, 'show'])->name('backend.gallery.show');
Route::post('store-fmc-gallery',  [App\Http\Controllers\GalleryController::class, 'store'])->name('backend.gallery.store');
Route::get('edit-gallery{id}', [App\Http\Controllers\GalleryController::class, 'edit'])->name('backend.edit.gallery');
Route::patch('update-gallery/{id}', [App\Http\Controllers\GalleryController::class, 'update'])->name('backend.update.gallery');
Route::delete('delete-gallery/{id}', [App\Http\Controllers\GalleryController::class, 'destroy'])->name('backend.delete.gallery');

});

Route::middleware(['auth'])->group(function () {
// Messages
Route::get('fmc-messages', [App\Http\Controllers\MessageController::class, 'index'])->name('backend.message');
Route::post('store-fmc-messages',  [App\Http\Controllers\MessageController::class, 'store'])->name('backend.message.store');
Route::delete('delete-messages/{id}', [App\Http\Controllers\MessageController::class, 'destroy'])->name('backend.delete.message');

});

Route::middleware(['auth'])->group(function () {
// Refused Reservation
Route::delete('reservation/{id}', [App\Http\Controllers\ReservationController::class, 'destroy'])->name('refuse.reservation');
Route::get('reservation/restore/{id}', [App\Http\Controllers\ReservationController::class, 'restore'])->name('restore.reservation');
Route::get('refused-reservation', [App\Http\Controllers\ReservationController::class, 'showRefused'])->name('reservation.refused');

});
