{{-- footer blade used in main blade --}}

<footer class="px-5 lg:px-20 py-15 bg-gray-100 flex justify-evenly gap-14 flex-wrap  border-t">
    <!-- logo wrapper -->
    <div class="flex flex-col gap-4">
        <img src="{{ asset('images/logo.png') }}" alt="logo" class=" h-[200px] w-auto object-cover">
        <p class="text-center text-gray-500">Copyright &copy; 2023 All rights reserved Film Development board</p>
    </div>

    <div class="flex flex-wrap gap-14">
        <div class="flex flex-col gap-4">
            <h1 class="text-2xl font-normal">About us</h1>
            <ul class="text-gray-500 flex flex-col gap-2">
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms and Conditions</a></li>
            </ul>
        </div>
    
        <div class="flex flex-col gap-4">
            <h1 class="text-2xl font-normal">Resources</h1>
            <ul class="text-gray-500 flex flex-col gap-2">
                <li><a href="#">Libraries</a></li>
                <li><a href="#">Publications</a></li>
                <li><a href="#">Articles</a></li>
            </ul>
        </div>
        <div class="flex flex-col gap-4">
            <h1 class="text-2xl font-normal">Others</h1>
            <ul class="text-gray-500 flex flex-col gap-2">
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Donations</a></li>
            </ul>
    
        </div>
    </div>
</footer>