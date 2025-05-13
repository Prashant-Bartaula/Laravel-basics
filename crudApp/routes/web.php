<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', function () {

    // $posts=Post::all();//get all posts

    //get the posts from the logged in user.
    // $posts=Post::where('user_id', auth()->id())->get();

    $posts=[];
    if(auth()->check()){
        $posts=auth()->user()->usersCoolPosts()->latest()->get();
    }
    return view('home', ['posts'=>$posts, 'allPosts'=>Post::all()]);
});


//defined a post route. This tells Laravel to use the register method in the UserController class to handle the request.the second argument acts as a callback function when the register route is hit.
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

//blog posts routes
Route::post('/create-post', [PostController::class, 'createPost']);
Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen']);
Route::put('/edit-post/{post}', [PostController::class, 'updatePost']);
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);