<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LogInController;
use App\Http\Controllers\Auth\LogOutController;
use App\Http\Controllers\Auth\RegisterController;

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



Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LogInController::class, 'index'])->name('login');
Route::post('/login', [LogInController::class, 'store']);



Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/logout', [LogOutController::class, 'store'])->name('logout');

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
