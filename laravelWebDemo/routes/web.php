<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class,'home']);
Route::get('/about/introduction', [AboutController::class, 'aboutIntroduction']);