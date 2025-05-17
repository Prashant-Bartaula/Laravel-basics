<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@latest"></script>
    @vite('resources/css/home.css')
</head>

<body>

    {{-- this is a blade directive that checks if the user is logged in --}}
    @auth
        {{-- message display --}}
        @if (session('success'))
            <p style="
                        color: green;
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        text-align: center;
                        background-color: white;
                        box-shadow: 1px 1px 1px 1px rgb(8, 8, 8, .1);
                        padding: 10px;
                        z-index: 999;">
                {{ session('success')}}
            </p>
        @elseif(session('error'))
            <p style="
                        color: red;
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        background-color: white;
                        text-align: center;
                        box-shadow: 1px 1px 1px 1px rgb(8, 8, 8, .1);
                        padding: 10px;
                        z-index: 999;">
                {{ session('error') }}
            </p>
        @endif


        <div id="posts-container" >
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

            {{-- display posts --}}
            <div style="height: 1px;widows: 100%;background-color: rgb(2, 2, 2, .1); margin: 50px 0;">
            </div>

            {{-- //your posts --}}
            <div class='posts'>
                <h1 style="color:rgb(3, 3, 3,.7);text-align: center;margin-top: 70px;">Your Posts</h1>

                @foreach ($posts as $post)
                    <div class='post'>
                        <h2>{{ $post->title }} by <span style="font-size: 16px; color:gray;">{{ $post->user->name }}</span>
                        </h2>

                        {{-- blade uses this {{}} to prevent against Xss attacks. by preventing to run scripts --}}
                        <p>{{ $post->body }}</p>
                        <div style="display: flex; justify-content: start;align-items: center;flex-wrap:wrap;gap: 10px">

                            {{-- In standard HTML, <form method="DELETE"> is not valid — browsers only support GET and POST
                                methods in forms. --}}

                                {{-- It adds a hidden input field inside the form like:
                                <input type="hidden" name="_method" value="DELETE">Laravel reads this hidden input on the server side and treats the request as a DELETE request, even though the browser sends it as a POST. --}}
                                <form action="/delete-post/{{ $post->id }}" method="POST" style="padding:10px">
                                    @csrf
                                    @method('DELETE')
                                    <button>Delete</button>
                                </form>
                                <button><a href="/edit-post/{{ $post->id }}">Edit</a></button>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- All posts  --}}
            <div class='posts'>
                <h1 style="color:rgb(3, 3, 3,.7);text-align: center;margin-top: 70px;">All Posts</h1>

                @foreach ($allPosts as $post)
                    <div class='post'>
                        <h2>{{ $post->title }} by <span style="font-size: 16px; color:gray;">{{ $post->user->name }}</span>
                        </h2>
                        <p>{{ $post->body }}</p>
                        <div style="display: flex; justify-content: start;align-items: center;flex-wrap:wrap;gap: 10px">
                            <form action="/delete-post/{{ $post->id }}" method="POST" style="padding:10px">
                                @csrf
                                @method('DELETE')
                                <button>Delete</button>
                            </form>
                            <button><a href="/edit-post/{{ $post->id }}">Edit</a></button>
                        </div>
                    </div>
                @endforeach
            </div>


            {{-- we use post for simple action like logout as well to prevent csrf attacks --}}
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