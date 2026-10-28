<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::post('/contact/send-otp', [ContactController::class, 'sendOtp'])
    ->middleware('throttle:6,1')
    ->name('contact.sendOtp');

Route::post('/contact/verify-submit', [ContactController::class, 'verifyAndSubmit'])
    ->middleware('throttle:10,1')
    ->name('contact.verifySubmit');