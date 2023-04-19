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
    return view('homepage');
});
Route::get('/home', function () {
    return view('homepage');
}) ->name('home');
Route::get('/trending', function () {
    return view('trending');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/cart', function () {
    return view('cart');
});

Route::get('/test', function () { 
     return view('test');
});
Route::get('/about', function () { 
    return view('about');
});
Route::get('/contact', function () { 
    return view('contact');
});
Route::get('login', function () { 
    return view('auth.login');
})->name('login');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
