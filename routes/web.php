<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/portofolio', function () {
    return view('pages.portofolio');
});

//

Route::get('/create', function () {
    return view('products.create');
});
Route::get('/show', function () {
    return view('products.show');
});
Route::get('/edit', function () {
    return view('products.edit');
});
Route::get('/products', function () {
    return view('products.index');
});

//route resource for products
Route::resource('/products', \App\Http\Controllers\ProductController::class);
