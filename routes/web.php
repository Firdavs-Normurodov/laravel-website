<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'welcome'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/service', [SiteController::class, 'service'])->name('service');
Route::get('/portfolio', [SiteController::class, 'portfolio'])->name('portfolio');
Route::get('/camponents', [SiteController::class, 'camponents']);

// Route::get('/teachers', [TeachersController::class, 'create']);
// Route::get('/teachers', [TeachersController::class, 'store']);
Route::resource('teachers', TeachersController::class);
