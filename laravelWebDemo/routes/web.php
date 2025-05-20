<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class,'home']);
Route::get('/about/introduction', [AboutController::class, 'aboutIntroduction']);
Route::get('/about/exmembers', [AboutController::class,'exMembers']);

//to create data when user routes to article page(just to test how things work)
Route::get('/article', [AboutController::class,'article']);
//simple api to create exmembers
Route::post('/api/create-exmembers', [AboutController::class,'createExMembers']);
