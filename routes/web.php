<?php

use Illuminate\Support\Facades\Route;

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
    return view('about');
});

Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/services/ac', function () {
    return view('services/ac');
});

Route::get('/services/appliances', function () {
    return view('services/appliances');
});
