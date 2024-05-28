<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



if(!Auth::check()){
    Route::redirect('/', '/login');
}

Route::get('/products', [App\Http\Controllers\HomeController::class, 'products'])->name('products');

Route::get('/commands', [App\Http\Controllers\HomeController::class, 'commands'])->name('commands');

Route::get('/info', [App\Http\Controllers\HomeController::class, 'info'])->name('info');

Route::get('/coins', [App\Http\Controllers\HomeController::class, 'coins'])->name('coins');

