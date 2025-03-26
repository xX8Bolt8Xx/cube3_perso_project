<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route pour la page browser, qui appelle maintenant la méthode index du contrôleur
Route::get('/browser', [ItemController::class, 'index'])->name('browser');

// Route pour la liste des items
Route::get('/items', [ItemController::class, 'index'])->name('items.index');

// Route pour créer des items (store)
Route::post('/items', [ItemController::class, 'store'])->name('items.store');

// Si nécessaire, d'autres routes pour voir les pages de création ou édition
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
