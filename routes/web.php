<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\BrgyCertController;
use App\Models\Residents\ResidentRecord;
// use PDF;

/**
 * Modules
 */
use App\Http\Controllers\PDFController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route::get('/brgy_cert', function () {
//     return view('services/brgy_cert');
// })->name('brgy_cert');

//CRUD FOR BRGY_CERT
Route::get('/brgy_cert', [BrgyCertController::class, 'index'])->name('brgy_cert');
Route::get('/brgy_cert/requests', [BrgyCertController::class, 'getAll'])->name('brgy_cert_requests');
Route::post('/brgy_cert', [BrgyCertController::class, 'store']);

Route::get('/brgy_clearance', [BrgyCertController::class, 'clearance'])->name('brgy_clearance');

Route::get('/brgy_indigency', [BrgyCertController::class, 'indigency'])->name('indigency');

Route::get('/brgy_permit', [BrgyCertController::class, 'permit'])->name('permit');

Route::get('/brgy_spc', [BrgyCertController::class, 'spc'])->name('spc');

Route::get('/privacy_policy', [BrgyCertController::class, 'privacy_policy'])->name('privacy_policy');

Route::get('/disclaimer', [BrgyCertController::class, 'disclaimer'])->name('disclaimer');

Route::get('/thebarangay', function () {
    return view('the_barangay/the_barangay');
})->name('thebarangay');

Route::get('/brgy_officials', function () {
    return view('the_barangay/brgy_officials');
})->name('brgy_officials');

Route::get('/mission_vision', function () {
    return view('the_barangay/mission_vision');
})->name('mission_vision');

Route::get('/hotline', function () {
    return view('the_barangay/hotline');
})->name('hotline');

Route::get('cert-mail', function() {
    $mail = new App\Mail\Residents\CertificateStatus;

    return $mail;
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
