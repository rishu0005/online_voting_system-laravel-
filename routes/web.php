<?php

use App\Http\Controllers\CandidateControl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ElectionController;
use App\Http\Middleware\AdminRoleOnly;
use App\Http\Middleware\UserRoleOnly;
use App\Http\Middleware\UserLoginCheck;

//Login
Route::get('/', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/loginUser', [UserController::class, 'loginUser'])->name('loginUser');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
// Route::post('/logout', [UserController::class, 'logout'])->name('logout');

//register 
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/registerUser', [UserController::class, 'registerUser'])->name('registerUser');


// Webpages
Route::get('/home', [UserController::class , 'home'])->name('home')->middleware([UserLoginCheck::class], [UserRoleOnly::class]);
Route::get('/dashboard', [UserController::class , 'dashboard'])->name('dashboard')->middleware([UserLoginCheck::class], [AdminRoleOnly::class]);
Route::get('/candidates', [CandidateControl::class, 'candidatePage'])->name('candidates')->middleware([UserLoginCheck::class], [AdminRoleOnly::class]);
Route::get('/elections', [ElectionController::class, 'election'])->name('elections')->middleware([UserLoginCheck::class], [AdminRoleOnly::class]);
Route::get('/voters', [UserController::class, 'voters'])->name('voters')->middleware([UserLoginCheck::class], [AdminRoleOnly::class]);
Route::get('/results', [])->name('result')->middleware([UserLoginCheck::class], [AdminRoleOnly::class]);


//Election Pages
Route::get('/new-election', [ElectionController::class , 'electionForm'])->name('new-election')->middleware([UserLoginCheck::class], [AdminRoleOnly::class]);
Route::post('/save-election', [ElectionController::class , 'saveElection'])->name('save-election');


//Candidate Pages
Route::get('/assign-candidate',[ElectionController::class, 'assignCandidate'])->name('assign-candidate')->middleware([UserLoginCheck::class], [AdminRoleOnly::class]);
Route::get('/notice-page', [CandidateControl::class, 'noticePage'])->name('notice-page')->middleware( [UserRoleOnly::class]);
Route::get('/apply-election/{id}', [CandidateControl::class, 'applyElection'])->name('apply-election');
Route::post('/apply-election-form', [CandidateControl::class, 'applyElectionForm'])->name('apply-election-form');

