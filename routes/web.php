<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SauceController;

Route::get('/', function () {
    return view('welcome');
});

Route::resources(['sauces' => SauceController::class,]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
