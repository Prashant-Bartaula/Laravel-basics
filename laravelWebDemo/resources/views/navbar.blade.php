<!-- {{-- navbar blade template that will be used with @include in main blade for code reusability --}} -->
<div class="px-5 md:px-8 py-2">
    <!-- logo and search  -->
    <div class="flex justify-start gap-7 sm:gap-10 flex-wrap sm:justify-between items-center">
        <!-- logo wrapper  -->
        <div class="relative h-[120px] w-auto">
            <img
                src="{{ asset('images/logo.png') }}"
                alt="logo_image"
                class="h-full object-cover"
            />
        </div>

        <!-- search and filter wrapper  -->
        <div class="flex items-center gap-3">
            <form action="#" class="flex items-center gap-3 flex-wrap">
                <select value="eng" class="cursor-pointer px-2 py-1">
                        <option value="eng">Eng</option> 
                        <option value="nep">Nep</option>
                </select>
                <input type="text" placeholder="search..." class="px-2 py-1">
                    <button type="submit" class=" text-black font-bold rounded-lg cursor-pointer relative "><span class="text-3xl px-2 py-1">&#x2315</span></button>
            </form>
        </div>
    </div>

    <!-- navbar  -->
    <nav class="px-3 my-7 md:px-5 py-3 bg-blue-100 text-blue-400 rounded-lg font-[500] text-xl overflow-hidden md:overflow-visible" id="navbar">
                    <!-- hamburger  -->
                     <div class="md:hidden flex justify-end">
                         <button class="cursor-pointer" ><img src="{{ asset('images/hamburger.svg') }}" alt="hamburger" class="w-10 h-10" id="hamburger"></button>
                     </div>                     

        <ul class="h-0 md:h-fit flex flex-col items-start md:flex-row gap-7 transition-all duration-300 ease-linear" id="navbar-item-wrapper">
            <li class="custom-nav-links cursor-pointer relative px-2 hover:text-blue-500  transition-all duration-150 ease-in mt-5 md:mt-0"><a href="/">Home</a></li>
            <li class="custom-nav-links cursor-pointer relative px-2 hover:text-blue-500  transition-all duration-150 ease-in">
                <h2 class="font-[500] text-xl">About us <span>&#9660</span></h2>
                <div class="custom-dropdown hidden transition-all duration-150 ease-in-out absolute top-3 left-25 md:top-7 rounded-xl md:left-0  bg-blue-200 z-10 overflow-hidden">
                    <ul class="flex flex-col gap-3 text-nowrap text-blue-400 py-2">
                        <li class="cursor-pointer relative hover:bg-blue-300 hover:text-blue-500 px-3 py-1"><a href="#">Introduction</a></li>
                        <li class="cursor-pointer relative hover:bg-blue-300 hover:text-blue-500 px-3 py-1"><a href="#">Ex. members</a></li>
                        <li class="cursor-pointer relative hover:bg-blue-300 hover:text-blue-500 px-3 py-1"><a href="#">Ex. charipersons</a></li>
                    </ul>
                </div>
            </li>
            <li class="custom-nav-links cursor-pointer relative px-2 hover:text-blue-500  transition-all duration-150 ease-in">
                <h2 class="font-[500] text-xl">Resources <span>&#9660</span></h2>
                <div class="custom-dropdown hidden transition-all duration-150 ease-in-out absolute top-3 left-25 md:top-6 rounded-xl md:left-0 bg-blue-200 z-10 overflow-hidden">
                    <ul class="flex flex-col gap-3 text-nowrap text-blue-400 py-2">
                        <li class="cursor-pointer relative hover:bg-blue-300 hover:text-blue-500 px-3 py-1"><a href="#">Libraries</a></li>
                        <li class="cursor-pointer relative hover:bg-blue-300 hover:text-blue-500 px-3 py-1"><a href="#">Publications</a></li>
                        <li class="cursor-pointer relative hover:bg-blue-300 hover:text-blue-500 px-3 py-1"><a href="#">Articles</a></li>
                    </ul>
                </div>
            </li>
         <li class="custom-nav-links cursor-pointer relative px-2 hover:text-blue-500  transition-all duration-150 ease-in"><a href="/">Contact</a></li>
            <li class="custom-nav-links cursor-pointer relative px-2 hover:text-blue-500  transition-all duration-150 ease-in"><a href="/">Donations</a></li>
        </ul>
    </nav>
</div>
