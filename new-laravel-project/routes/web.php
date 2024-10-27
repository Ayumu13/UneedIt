<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CalenderController;

Route::get('/index', function () {
    return view('index');
});

Route::get('/OverOns', function () {
    return view('OverOns');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/home', function () {
    return view('home');
});

// Route for displaying the form
Route::get('/form', function () {
    return view('form');
});

Route::get('/calendar/events', [CalendarController::class, 'fetchEvents']);
Route::post('/calendar/events', [CalendarController::class, 'storeEvent']);

Route::get('/check-login-status', [AuthController::class, 'checkLoginStatus']);
Route::view('/home', 'home');
Route::view('/service', 'service');
Route::view('/zakelijk', 'zakelijk');
Route::view('/faq', 'faq');
Route::view('/Bezorgdiensten', 'Bezorgdiensten');
Route::view('/account', 'account');