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
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/shop-grid', function () {
    return view('shop-grid');
})->name('shop-grid');

Route::get('/shop-sidebar', function () {
    return view('shop-sidebar');
})->name('shop-sidebar');

Route::get('/shop-detail', function () {
    return view('shop-detail');
})->name('shop-detail');

Route::get('/customer-services', function () {
    return view('customer-services');
})->name('customer-services');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/my-account', function () {
    return view('my-account');
})->name('my-account');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/forget-password', function () {
    return view('forget-password');
})->name('forget-password');

Route::get('/team', function () {
    return view('team');
})->name('team');
    
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
    