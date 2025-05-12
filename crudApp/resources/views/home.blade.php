<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   @vite('resources/css/home.css')
</head>
<body>

    @auth 
    <div id="posts-container">
        <div id='create_post_container'>
           <div id="header-wrapper">
                    <h1>Create new post</h1>
                    <p>enter details below</p>
                </div>
            <form action="/create-post" method="POST">
                @csrf
                <input type="text" name="title" placeholder="post title">
                <textarea name="body" placeholder="body content..."></textarea>
                <button>Save post</button>
            </form>
        </div>

        {{-- display posts  --}}
        <div style="height: 1px;widows: 100%;background-color: rgb(2, 2, 2, .1); margin: 50px 0;">
        </div>
        
        <div id='posts'>
            <h1 style="color:rgb(3, 3, 3,.7);text-align: center;margin-top: 70px;">All Posts</h1>

            @foreach($posts as $post)
                <div class='post'>
                    <h2>{{ $post->title }}</h2> 
                    <p>{{$post->body}}</p>
                </div>
            @endforeach
        </div>

        <form action="/logout" method='POST' id='logout_form'>
            @csrf
            <button>Logout</button>
        </form>
    </div>
    

    @else 
    <div id="container">
            <div class="form-wrapper">
                <div id="header-wrapper">
                    <h1>User Registration</h1>
                    <p>enter your details below</p>
                </div>
                <form action="/register" method="POST">
                    <!-- protection against cross site request forgery -->
                    @csrf
    
                    <div class="form-group">
                        <label for="name">Name <span>*</span></label>
                        <input type="text" name='name' id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email <span>*</span></label>
                        <input type="email" name='email' id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password <span>*</span></label>
                        <input type="password" name='password' id="password">
                    </div>
                    <button type="submit">Register</button>
                </form>
            </div>
            <div class="form-wrapper">
                <div id="header-wrapper">
                    <h1>Login</h1>
                    <p>enter your details below</p>
                </div>
                <form action="/login" method="POST">
                    <!-- protection against cross site request forgery -->
                    @csrf
    
                    <div class="form-group">
                        <label for="loginname">Name <span>*</span></label>
                        <input type="text" name='loginname' id="loginname">
                    </div>
                    <div class="form-group">
                        <label for="loginpassword">Password <span>*</span></label>
                        <input type="password" name='loginpassword' id="loginpassword">
                    </div>
                    <button type="submit">Login</button>
                </form>
            </div>
    </div>

    @endauth
</body>
</html>