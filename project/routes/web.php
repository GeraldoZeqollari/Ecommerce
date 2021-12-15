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

Route::get('/', function () {
    return view('home');
});



Route::get('/shopgrid', function () {
    return view('layouts.shopgrid');
});
Route::get('/shoplist', function () {
    return view('layouts.shoplist');
});

Route::get('/order', function () {
    return view('layouts.order');
});

Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('/contact', function () {
    return view('layouts.contact');
});
