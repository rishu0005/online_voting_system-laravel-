<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ElectionController;

//Login
Route::get('/', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/loginUser', [UserController::class, 'loginUser'])->name('loginUser');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
// Route::post('/logout', [UserController::class, 'logout'])->name('logout');

//register 
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/registerUser', [UserController::class, 'registerUser'])->name('registerUser');

// Webpages
Route::get('/home', [UserController::class , 'home'])->name('home');
Route::get('/new-election', [ElectionController::class , 'electionForm'])->name('new-election');


