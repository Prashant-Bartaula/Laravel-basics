<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request ){
        $postData =$request->validate([
            "title"=> "required",
            "body"=>'required'
        ]);

        $postData['title']=strip_tags($postData['title']);//removes html tags for security 
        $postData['body']=strip_tags($postData['body']);
        $postData['user_id']=auth()->id();

        Post::create($postData);
        return redirect('/');
    }
}
