<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ShopgridController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Auth\LogInController;
use App\Http\Controllers\CreateBlogController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LogInController::class, 'index'])->name('login');
Route::post('/login', [LogInController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/upload', [UploadController::class, 'index'])->name('upload');
Route::post('/upload', [UploadController::class, 'store']);

Route::get('/createblog', [CreateBlogController::class, 'index'])->name('createblog');
Route::post('/createblog', [CreateBlogController::class, 'store']);

Route::get('/logout', [LogOutController::class, 'store'])->name('logout');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::post('/blog', [CommentController::class, 'store'])->name('comment');

Route::get('/shopgrid', [ShopgridController::class, 'index'])->name('shopgrid');


Route::get('/shoplist', [ShopgridController::class, 'shoplist'])->name('shoplist');

Route::get('/order', [ShopgridController::class, 'order'])->name('order');

Route::get('/about', [ShopgridController::class, 'about'])->name('about');

Route::get('/contact', [ShopgridController::class, 'contact'])->name('contact');
