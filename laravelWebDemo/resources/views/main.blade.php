<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    {{--@yield is a blade special syntax that allows you to inject clean, dynamic code.  Used in a layout file to define a "placeholder" section where content from other templates will be injected. Like we will use about page inside this page blade with @section and @extendes syntax --}}

    <title>@yield('title')</title>
    @vite(['./resources/css/global.css', './resources/js/homepage.js'])
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body>
    
    {{-- @include loads navbar from views/navbar.blade.php  --}}

    @include('navbar')

    <main>
        @yield('hero')
    </main>

    @include('footer')

    
</body>
</html>