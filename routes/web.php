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
    return view('home');
});

Route::get('/rants', function () {
    return view('rants');
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

Route::get('/services/shifting-gears', function () {
    return view('services/shifting-gears');
});

Route::get('/services/artz-amazing', function () {
    return view('services/artz-amazing');
});

Route::get('/services/housesitting', function () {
    return view('services/housesitting');
});

Route::get('/services/healthy-home', function () {
    return view('services/healthy-home');
});
