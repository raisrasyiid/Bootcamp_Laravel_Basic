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
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact', ['name' => 'raisrasyiid', 'email' => 'raisrasyiid@gmail.com']);
});

// Route::view('/contact', 'contact');
// Route::view('/contact', 'contact', ['name' => 'raisrasyiid', 'email' => 'raisrasyiid@gmail.com']);

Route::redirect('/contact', '/contact_us', 301);

Route::get('/product', function () {
    return "ini halaman semua product";
});

Route::get('product/{id}', function ($id) {
    return view('product.detail', ['id' => $id]);
});
