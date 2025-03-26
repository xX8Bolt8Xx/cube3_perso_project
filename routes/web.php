<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/browser', function () {
    return view('browser');
})->name('browser');

Route::resource('items', ItemController::class)/*->middleware(['auth'])*/;


