<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AttendanceController;

Route::get('/', [AttendanceController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [UserController::class, 'index']);
Route::post('/store', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'getlogin']);

Auth::routes();