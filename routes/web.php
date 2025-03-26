<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/encheres', function () {
    return view('encheres.index');
})->name('encheres');

