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
Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/test', function () {
     return view('test');
});

Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/search', function () {
    return view('frontend.search');
});

Route::get('logout', function () {
    return view('auth.login');
}) -> name('logout');

Route::post('/register/store', [UserController::class, 'store']);


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin','App\Http\Controllers\ProductController@index')->name('index');
Route::get('/create','App\Http\Controllers\ProductController@create')->name('create');
Route::post('store/','App\Http\Controllers\ProductController@store')->name('store');
Route::get('show/{product}','App\Http\Controllers\ProductController@show')->name('show');
Route::get('edit/{product}','App\Http\Controllers\ProductController@edit')->name('edit');
Route::put('edit/{product}','App\Http\Controllers\ProductController@update')->name('update');
Route::delete('/{product}','App\Http\Controllers\ProductController@destroy')->name('destroy');

Route::get('/menu', 'App\Http\Controllers\ProductController@menu')->name('menu'); 
