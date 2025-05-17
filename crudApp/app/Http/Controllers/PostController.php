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

    public function showEditScreen(Post $post){
        //the auth method stores the user object in a cookie or session(server session) so it doesnot always query the databse to fetch the entire user object or the id of the user. auth decodes the sessio tokens and fetches user info from it. On each request, the server uses the cookie to retrieve the session from its storage. By default browser sends cookies with each request.
        if(auth()->user()->id!==$post['user_id']){
            return redirect('/');
        }
        return view('edit-post', ['post'=>$post]);
    }

    public function updatePost(Post $post, Request $request ){
         if(auth()->user()->id!==$post['user_id']){
            return redirect('/')->with('error', 'You are Unauthorized!!!');
        }
        $postData=$request->validate([
            "title"=> "required",
            "body"=>'required'
        ]);

        $postData['title']=strip_tags($postData['title']);//removes html tags and returns plain text 
        $postData['body']=strip_tags($postData['body']);

        $post->update($postData);
        return redirect('/')->with('success','Post updated successfully');
    }

    public function deletePost(Post $post){
        if(auth()->user()->id===$post['user_id']){
            //model instance can get access to orms methods. also the model class Post can also get access to the orms.
            $post->delete();
            return redirect('/')->with('success', 'Post deleted successfully');
        }
        return redirect('/')->with('error', 'You are Unauthorized!!!');
    }
}
