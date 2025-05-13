<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100vh;
    }
    form{
        display: flex;
        flex-direction: column;
        gap: 10px;
        max-width: 500px;
        position: relative;
    }
    form input, form textarea{
        padding: 10px;
        border-radius: 5px;
        min-width: 300px;
        max-width: 100%;
        border: 1px solid black;
    }
    textarea{
        min-height: 350px;
    }
    form button{
        padding: 10px;
        border-radius: 5px;
        border: 1px solid black;
        background-color:#303030; 
        color: white;
        cursor: pointer;
    }
</style>
<body>
    <h1>Edit Post</h1>
    <form action="/edit-post/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{$post->title}}">
        <textarea name="body" >{{$post->body}}</textarea>
        <button>Save changes</button>
    </form>
</body>
</html>