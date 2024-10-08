<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CalenderController;

Route::get('/index', function () {
    return view('index');
});

// Route for displaying the form
Route::get('/form', function () {
    return view('form');

});


Route::get('/check-login-status', [AuthController::class, 'checkLoginStatus']);
Route::view('/home', 'home');
Route::view('/OverOns', 'OverOns');
Route::view('/service', 'service');
Route::view('/zakelijk', 'zakelijk');
Route::view('/faq', 'faq');
Route::view('/Bezorgdiensten', 'Bezorgdiensten');
Route::view('/account', 'account');

