<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'index'])
    ->name('login')
    ->middleware('guest');

Route::get('/', function () {
    return view('welcome');
});
