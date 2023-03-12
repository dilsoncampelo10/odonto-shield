<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/cadastro', [RegisterController::class, 'index'])->name('register');
Route::post('/cadastro', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::any('/sair', [LoginController::class, 'logout'])->name('logout');

Route::resource('patients', UserController::class);
