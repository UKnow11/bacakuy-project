<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\DashboardController;
use App\Models\Book;

Route::get('/',[PageController::class, 'home'])->name('home');

Route::get('/membership',[PageController::class, 'membership'])->name('membership');

//Genre
Route::get('/children',[PageController::class, 'children'])->name('children');
Route::get('/fantasy',[PageController::class, 'fantasy'])->name('fantasy');
Route::get('/scifi',[PageController::class, 'scifi'])->name('scifi');
Route::get('/horror',[PageController::class, 'horror'])->name('horror');
Route::get('/romance',[PageController::class, 'romance'])->name('romance');
//Route::get('/children/{book:slug}', [PageController::class,'show']);

//Route::get('/login',[PageController::class, 'login'])->name('login');
//Route::get('/register',[PageController::class, 'register'])->name('register');
//Route::post('/register-auth',[AuthController::class, 'register'])->name('registerAuth');

Route::get('/login',[LoginController::class,'index'])->middleware('guest');
Route::post('/login',[LoginController::class,'auth']);
Route::get('/register',[RegistController::class,'index'])->middleware('guest');
Route::post('/register',[RegistController::class,'store']);

Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');