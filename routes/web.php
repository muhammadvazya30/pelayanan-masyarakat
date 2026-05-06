<?php

use App\Http\Controllers\MasyarakatController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// use App\Models\Masyarakat;
// use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data-masyarakat', function () { 
    return view('data-masyarakat');
});

Route::get('/index', function () {
    return view('index');
});

// Route::get('', function () { 
//     return view('create');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/data-masyarakat', MasyarakatController::class);

