<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SauceController;

Route::get('/', function () {
    return view('welcome');
});

Route::resources(['sauces' => SauceController::class,]);