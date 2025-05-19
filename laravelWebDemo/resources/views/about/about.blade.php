@extends('main') @section('title', 'About Page') @section('content')
<div class="px-3 lg:px-6">
    
    <!-- timeline wrapper  -->
    <div class="max-w-[1350px] mx-auto py-[70px] relative">
        <h1 class="text-2xl md:text-4xl font-semibold text-center">
            Historical Timeline Of Cinema In Nepal
        </h1>
        <!-- timeline of nepali cinema  -->
        <div class="mt-8 scroller w-full overflow-hidden">
            <ul class="scroller_inner flex flex-nowrap gap-6 w-max
            ">
                <li class="relative max-w-[300px] px-3 scroll-item cursor-pointer flex flex-col gap-5 ">
                    <img src="https://film.gov.np/media/filmgov/MV5BZTE3YjRkNWUtN2MyNy00NTZmLWEwNGItM2Zk_.jpg.400x400_q85_box-0%2C78%2C500%2C577_crop_detail.jpg" alt="random-img" class="object-cover h-[320px] w-auto z-50">
                    <div class="timeline-item-redmarker relative h-[2px] bg-gray-300 w-full overflow-visible"></div>
                    <h1 class="text-2xl mt-2 font-semibold text-gray-400">B.s 2062</h1>
                    <h2 class="text-2xl font-semibold break-all">The First Nepali Movie</h2>
                </li>
                <li class="relative max-w-[300px] px-3 scroll-item cursor-pointer flex flex-col gap-5">
                    <img src="https://film.gov.np/media/filmgov/MV5BNWNhNTJlMzktZmU0Yi00OWM0LWEwMDMtZjIzYmI5Nnam_.jpg.400x400_q85_box-0%2C52%2C214%2C265_crop_detail.jpg" alt="random-img" class="object-cover h-[320px] w-auto z-50">
                    <div class="timeline-item-redmarker relative h-[2px] bg-gray-300 w-full overflow-visible"></div>
                    <h1 class="text-2xl mt-2 font-semibold text-gray-400">B.s 2056</h1>
                    <h2 class="text-2xl font-semibold break-all">First Kathmandu international film festival</h2>
                </li>
                <li class="relative max-w-[300px] px-3 scroll-item cursor-pointer flex flex-col gap-5">
                    <img src="https://film.gov.np/media/filmgov/MV5BMjExMzAyNjIwOV5jpg_UX319_.jpg.400x400_q85_box-0%2C33%2C319%2C352_crop_detail.jpg" alt="random-img" class="object-cover h-[320px] w-auto z-50">
                    <div class="timeline-item-redmarker relative h-[2px] bg-gray-300 w-full overflow-visible"></div>
                    <h1 class="text-2xl mt-2 font-semibold text-gray-400">B.s 2052</h1>
                    <h2 class="text-2xl font-semibold break-all">First nepali digital film "kagbeni" released</h2>
                </li>
                <li class="relative max-w-[300px] px-3 scroll-item cursor-pointer flex flex-col gap-5">
                    <img src="https://film.gov.np/media/filmgov/MV5BZWNkY2MxYzItYTUwMC00ODEzLTkyNDAtOGE5OWI3YjAwMzdiXkEyXkFqcGdeQXVyNTEwOTEz.jpg.400x400_q85_box-0%2C306%2C1387%2C1694_crop_detail.jpg" alt="random-img" class="object-cover h-[320px] w-auto z-50">
                    <div class="timeline-item-redmarker relative h-[2px] bg-gray-300 w-full overflow-visible"></div>
                    <h1 class="text-2xl mt-2 font-semibold text-gray-400">B.s 2060</h1>
                    <h2 class="text-2xl font-semibold break-all">First Nepali 3D film released</h2>
                </li>
                <li class="relative max-w-[300px] px-3 scroll-item cursor-pointer flex flex-col gap-5">
                    <img src="https://film.gov.np/media/filmgov/MV5BZWRhODIyNTEtNmM0Ni00OGM0LTk2Y2ItNDc3NmQxZDFiMjMwXkEyXkFqcGdeQXVyMjk4Mzk0NTc._V1_.jpg.400x400_q85_box-0%2C266%2C1280%2C1545_crop_detail.jpg" alt="random-img" class="object-cover h-[320px] w-auto z-50">
                    <div class="timeline-item-redmarker relative h-[2px] bg-gray-300 w-full overflow-visible"></div>
                    <h1 class="text-2xl mt-2 font-semibold text-gray-400">B.s 2052</h1>
                    <h2 class="text-2xl font-semibold break-all">Kalo pothi film released</h2>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    @vite(['resources/js/about.js'])
@endpush