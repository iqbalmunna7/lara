<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FullNameController;
Route::get('/',[\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/full-name',[\App\Http\Controllers\HomeController::class, 'fullName'])->name('fullName');
Route::get('/calculator',[\App\Http\Controllers\HomeController::class, 'calculator'])->name('calculator');
Route::post('/get-ful-name',[\App\Http\Controllers\FullNameController::class, 'getFullname'])->name('get-ful-name');
