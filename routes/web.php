<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('courses',[HomeController::class,'courses'])->name('courses');
Route::get('about',[HomeController::class,'about'])->name('about');
