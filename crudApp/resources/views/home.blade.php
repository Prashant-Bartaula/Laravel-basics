<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   @vite('resources/css/home.css')
</head>
<body>
    <div id="container">
        <div id="form-wrapper">
            <div id="header-wrapper">
                <h1>User Registration</h1>
                <p>enter your details below</p>
            </div>
            <form action="/register" method="POST">
                <!-- protection against cross site request forgery -->
                @csrf
                
                <div class="form-group">
                    <label for="name">Name <span>*</span></label>
                    <input type="text" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email <span>*</span></label>
                    <input type="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password <span>*</span></label>
                    <input type="password" id="password">
                </div>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</body>
</html>