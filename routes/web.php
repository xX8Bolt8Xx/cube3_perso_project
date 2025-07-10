<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CentresController;


Route::get('/', [ItemController::class, 'home'])->name('home');

Route::resource('centres', CentresController::class);

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/usr_crea', function () {
    return view('usr_crea');
})->name('usr_crea');

Route::resource('items', itemController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/items/{id}/export-pdf', [ItemController::class, 'exportPdf'])->name('items.exportPdf');


require __DIR__.'/auth.php';
