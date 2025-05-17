{{-- home blade  --}}
{{-- @extends tells this blade to use the main blade --}}
@extends('main')

{{-- @section Used in a child view to define what should go into the sections created by @yield in the layout.  --}}

@section('title', 'Home page') 

@section('hero')
<style>
    #herosection{
    background-image: url('{{ asset("/images/herosection.webp") }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
</style>

<!-- popup on page reload -->
<div
    class="hidden h-screen w-screen absolute top-0 z-100 left-0 px-4"
    id="popup-container"
>
    <!-- overlay  -->
    <div
        class="absolute top-0 left-0 w-full h-full bg-gray-900 opacity-50"
    ></div>

    <div
        class="relative top-[100px] left-[50%] -translate-x-1/2 bg-white px-12 py-10 max-w-[500px]"
        id="popup"
    >
        <!-- cross button  -->
        <button
            class="absolute top-3 right-4 text-xl text-gray-800 hover:text-black cursor-pointer"
            id="popup-close-button"
        >
            <img
                class="h-4 w-4 sm:w-5 sm:h-5"
                src="{{ asset('images/cross.svg') }}"
                alt="cross"
            />
        </button>

        <!-- content  -->
        <h1 class="text-lg sm:text-2xl text-center">
            Notice of election for the post of senior developer in District
            administration office
        </h1>
        <p class="text-sm mt-5 break-all sm:text-lg">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
            perferendis voluptates, suscipit possimus molestias ipsa soluta
            aperiam explicabo labore laudantium totam consectetur quia, vel in
            exercitationem. Aliquid nisi consequatur nemo!
        </p>

        <p></p>
    </div>
</div>

<!-- hero section  -->
<div class="relative flex justify-center items-center max-w-[1500px] h-fit px-2 py-[100px] sm:py-[150px] lg:py-[225px] mx-auto mb-20 sm:px-6" id="herosection">

    <!-- background image hero section  -->
    <!-- <div class="w-full h-full relative  mx-auto">
        <img
            src="{{ asset('images/herosection.webp') }}"
            srcset="{{ asset('images/herosection.webp') }} 1x, {{ asset('images/herosection2.webp') }} 2x"
            alt="hero"
            class="w-full h-full object-cover"
            id="hero"
    />
    </div> -->

    <!-- content  -->
    <div class="relative text-gray-300 max-w-[500px] md:max-w-[700px] " >
        <h1 class="text-2xl sm:text-2xl md:text-5xl font-semibold text-center">
            Promoting the Growth of Nepalese <span class="text-blue-400">Cinema</span>
        </h1>
        <p class="text-sm mt-8 md:text-lg break-all">
           Empowering filmmakers, preserving heritage, and driving the future of cinema in Nepal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat eum at
        </p>
        <div class="w-full text-center">
            <button class="bg-blue-700 text-white px-4 py-2 rounded-lg mt-5 cursor-pointer shadow-none!"><a href="#">Donate</a></button>
        </div>
    </div>
</div>

<!-- slider and notice section  -->
<div class="relative w-full mb-20 mx-auto flex flex-col xl:flex-row px-2 sm:px-6">

    <!-- slideshow and notice  -->
    <div class="grow">
        asdas
    </div>

    <!-- executive members -->
    <div class="flex w-full relative flex-col gap-9 xl:max-w-[350px]">

        <!-- member cards wrapper  -->
        <div class="flex justify-center flex-row flex-wrap xl:flex-col gap-13 xl:gap-9">
            <!-- member cards -->
            <div class="flex w-full max-w-[400px] flex-col gap-4 text-center">
                    <img src="https://images.unsplash.com/photo-1746802401358-8325ed75ba5b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw0OHx8fGVufDB8fHx8fA%3D%3D" alt="random-img" class="h-[300px] w-full object-cover">
                    <h1 class="text-lg  px-3"><a href="#" class="text-blue-500">Hon’ble Prithvi Subba Gurung</a></h1>
                    <p class="text-sm text-wrap px-3">Hon’ble Minister for Communication and Information Technology</p>
            </div>
            <div class="flex w-full max-w-[400px] flex-col gap-4 text-center">
                    <img src="https://images.unsplash.com/photo-1742314591445-bfacc47276e3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw2MHx8fGVufDB8fHx8fA%3D%3D" alt="random-img" class="h-[300px] w-full object-cover">
                    <h1 class="text-lg px-3"><a href="#" class="text-blue-500">Mr. Dinesh D.C. (Dinesh Raj Dahal)</a></h1>
                    <p class="text-sm px-3">Executive Chairperson, Film Development Board, Nepal</p>
            </div>
            <div class="flex w-full max-w-[400px] flex-col gap-4 text-center">
                    <img src="https://images.unsplash.com/photo-1747134392591-0c748c9727b3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw3NXx8fGVufDB8fHx8fA%3D%3D" alt="random-img" class="h-[300px] w-full object-cover">
                    <h1 class="text-lg px-3"><a href="#" class="text-blue-500">Mr. Rajesh Kumar Thapa</a></h1>
                    <p class="text-sm px-3">Member Secretary - Under Secretary (Law), Ministry of Communication and Information Technology</p>
            </div>
        </div>
        <button class="w-fit mx-auto bg-blue-700 text-white px-4 py-2 rounded-lg cursor-pointer shadow-none!"><a href="#">View All</a></button>
    </div>
</div>

@endsection
