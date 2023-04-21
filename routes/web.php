<?php

use App\Http\Controllers\UserController;
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
    return view('auth.login');
});
Route::get('/home', function () {
    return view('frontend.homepage');
}) ->name('home');
Route::get('/trending', function () {
    return view('frontend.trending');
});
Route::get('/menu', function () {
    return view('frontend.menu');
});
Route::get('/product', function () {
    return view('frontend.product');
});
Route::get('/cart', function () {
    return view('frontend.cart');
});

Route::get('/test', function () {
Route::get('/test', function () {
     return view('test');
});
Route::get('/about', function () {
    return view('about');
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('login', function () {

Route::get('logout', function () {
    return view('auth.login');
}) -> name('logout');

Route::post('/register/store', [UserController::class, 'store']);


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
