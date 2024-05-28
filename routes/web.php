<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

if(!Auth::check()){
    Route::redirect('/', '/login');
}



// if (Auth::check()) {    
//     return redirect('/home');
// } else {
//     return redirect('/register');
// }