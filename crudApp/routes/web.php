<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});


//defined a post route. This tells Laravel to use the register method in the UserController class to handle the request.the second argument acts as a callback function when the register route is hit.
Route::post('/register', [UserController::class, 'register']);

Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);
