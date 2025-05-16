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
                    <button type="submit" class="bg-red-500 text-white font-bold rounded-lg cursor-pointer"><span class="text-3xl px-2 py-1">&#x2315</span></button>
            </form>
        </div>
    </div>

    <!-- navbar  -->
    <nav>I am the navbar</nav>
</div>
