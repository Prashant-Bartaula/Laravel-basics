{{-- home blade  --}}
{{-- @extends tells this blade to use the main blade --}}
@extends('main')

{{-- @section Used in a child view to define what should go into the sections created by @yield in the layout.  --}}
@section('title', 'Home page')

@section('hero')

            <!-- popup on page reload -->
        <div class="hidden h-screen w-screen absolute top-0 z-100 left-0 px-4" id="popup-container">

            <!-- overlay  -->
             <div class="absolute top-0 left-0 w-full h-full bg-gray-900 opacity-50"></div>

                <div class="relative top-[100px] left-[50%] -translate-x-1/2 bg-white px-12 py-10 max-w-[500px]" id="popup">
                    <!-- cross button  -->
                    <button class="absolute top-3 right-4 text-xl text-gray-800 hover:text-black cursor-pointer" id="popup-close-button"><img class="h-4 w-4 sm:w-5 sm:h-5" src="{{ asset('images/cross.svg') }}" alt="cross"></button>
                    
                    <!-- content  -->
                     <h1 class=" text-lg sm:text-2xl text-center">Notice of election for the post of senior developer in government sector</h1>
                     <p class="text-sm mt-5 break-all sm:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia perferendis voluptates, suscipit possimus molestias ipsa soluta aperiam explicabo labore laudantium totam consectetur quia, vel in exercitationem. Aliquid nisi consequatur nemo!</p>

                     <p></p>
                </div>  
        </div>

        <!-- hero section  -->

@endsection