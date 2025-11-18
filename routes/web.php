<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::get('product', [PageController::class, 'product'])->name('product');
Route::get('search', [PageController::class, 'search'])->name('search');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'process'])->name('process');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'store'])->name('register.store');


Route::resource('recipes', RecipeController::class)
  ->except(['index', 'show'])
  ->middleware('auth');
Route::resource('recipes', RecipeController::class)
  ->only(['index', 'show']);



