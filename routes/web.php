<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('auth' , [AuthController::class, 'create'])->name('auth.create');
Route::post('auth' , [AuthController::class, 'register'])->name('auth.register');

Route::get('auth/data', [AuthController::class, 'data'])
->middleware('auth')
->name('auth.data');

Route::get('auth/login' , [AuthController::class, 'showLoginForm'])->name('auth.login.form');
Route::post('auth/login' , [AuthController::class, 'login'])->name('auth.login');

Route::post('auth/logout' , [AuthController::class, 'logout'])->name('auth.logout');
