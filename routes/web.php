<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\SearchController;
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
    return view('frontend.homepage');
});
Route::get('/home', function () {
    return view('frontend.homepage');
})->name('home');
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


Route::get('/layout', function () {
    return view('layout');
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


Route::post('/cart', [CartController::class, 'destroy']);
Route::post('/register/store', [UserController::class, 'store']);
Route::get('/search', 'SearchController@search')->name('search');

// Auth::routes();

Route::post('/cart_store', 'App\Http\Controllers\CartController@add')->name('add');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/shopping_cart', 'App\Http\Controllers\CartController@index')->name('cartItemss');
Route::put('/shopping_cart/{cart}', 'App\Http\Controllers\CartController@update')->name('cart.update');
Route::delete('/shopping_cart/{cart}', 'App\Http\Controllers\CartController@remove')->name('cart.remove');


Route::get('/product', 'App\Http\Controllers\ProductController@menu')->name('menu');
Route::get('/admin', 'App\Http\Controllers\ProductController@index')->name('index');
Route::get('/create', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/store', 'App\Http\Controllers\ProductController@store')->name('product.store');
Route::get('show/{product}', 'App\Http\Controllers\ProductController@show')->name('show');
Route::get('edit/{product}', 'App\Http\Controllers\ProductController@edit')->name('edit');
Route::put('edit/{product}', 'App\Http\Controllers\ProductController@update')->name('update');
Route::delete('/{product}', 'App\Http\Controllers\ProductController@destroy')->name('destroy');

Route::get('/menu', 'App\Http\Controllers\ProductController@menu')->name('menu');

Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [CartController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove_from_cart');

Route::get('/cart/add/{id}', 'CartController@add')->name('cart');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/create_category', 'App\Http\Controllers\CategoryController@create')->name('cat.create');
Route::post('store_category/', 'App\Http\Controllers\CategoryController@store')->name('store_category');

// page
Route::get('/product1', [ProductController::class, 'product1'])->name('product1');
// Route::get('/product2', [ProductController::class, 'product2'])->name('product2');
// Route::get('/products/{id}', 'App\Http\Controllers\CategoryController@index')->name('frontend.menu');
