@extends('main') @section('title', 'About Page') @section('content')
<div class="px-3 lg:px-6">
    <!-- timeline wrapper  -->
    <div class="max-w-[1350px] mx-auto py-[70px] relative">
        <h1 class="text-2xl md:text-4xl font-semibold text-center">
            Historical Timeline Of Cinema In Nepal
        </h1>
        <!-- timeline of nepali cinema  -->
        <div class="mt-8 scroller w-full overflow-hidden">
            <ul class="scroller_inner flex flex-nowrap gap-6 w-max">
                <li
                    class="relative max-w-[300px] px-3 scroll-item cursor-pointer flex flex-col gap-5"
                >
                    <img
                        src="https://film.gov.np/media/filmgov/MV5BZTE3YjRkNWUtN2MyNy00NTZmLWEwNGItM2Zk_.jpg.400x400_q85_box-0%2C78%2C500%2C577_crop_detail.jpg"
                        alt="random-img"
                        class="object-cover h-[320px] w-auto z-50"
                    />
                    <div
                        class="timeline-item-redmarker relative h-[2px] bg-gray-300 w-full overflow-visible"
                    ></div>
                    <h1 class="text-2xl mt-2 font-semibold text-gray-400">
                        B.s 2062
                    </h1>
                    <h2 class="text-2xl font-semibold break-all">
                        The First Nepali Movie
                    </h2>
                    <div id="timeline-cinema-hidden-content" class="hidden">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Officiis quo nulla ex eum ad repudiandae natus,
                        explicabo quaerat est nesciunt et repellendus enim omnis
                        porro ipsa ratione totam ducimus culpa.
                    </div>
                </li>
                <li
                    class="relative max-w-[300px] px-3 scroll-item cursor-pointer flex flex-col gap-5"
                >
                    <img
                        src="https://film.gov.np/media/filmgov/MV5BNWNhNTJlMzktZmU0Yi00OWM0LWEwMDMtZjIzYmI5Nnam_.jpg.400x400_q85_box-0%2C52%2C214%2C265_crop_detail.jpg"
                        alt="random-img"
                        class="object-cover h-[320px] w-auto z-50"
                    />
                    <div
                        class="timeline-item-redmarker relative h-[2px] bg-gray-300 w-full overflow-visible"
                    ></div>
                    <h1 class="text-2xl mt-2 font-semibold text-gray-400">
                        B.s 2056
                    </h1>
                    <h2 class="text-2xl font-semibold break-all">
                        First Kathmandu international film festival
                    </h2>
                    <div id="timeline-cinema-hidden-content" class="hidden">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Officiis quo nulla ex eum ad repudiandae natus,
                        explicabo quaerat est nesciunt et repellendus enim omnis
                        porro ipsa ratione totam ducimus culpa.
                    </div>
                </li>
                <li
                    class="relative max-w-[300px] px-3 scroll-item cursor-pointer flex flex-col gap-5"
                >
                    <img
                        src="https://film.gov.np/media/filmgov/MV5BMjExMzAyNjIwOV5jpg_UX319_.jpg.400x400_q85_box-0%2C33%2C319%2C352_crop_detail.jpg"
                        alt="random-img"
                        class="object-cover h-[320px] w-auto z-50"
                    />
                    <div
                        class="timeline-item-redmarker relative h-[2px] bg-gray-300 w-full overflow-visible"
                    ></div>
                    <h1 class="text-2xl mt-2 font-semibold text-gray-400">
                        B.s 2052
                    </h1>
                    <h2 class="text-2xl font-semibold break-all">
                        First nepali digital film "kagbeni" released
                    </h2>
                    <div id="timeline-cinema-hidden-content" class="hidden">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Officiis quo nulla ex eum ad repudiandae natus,
                        explicabo quaerat est nesciunt et repellendus enim omnis
                        porro ipsa ratione totam ducimus culpa.
                    </div>
                </li>
                <li
                    class="relative max-w-[300px] px-3 scroll-item cursor-pointer flex flex-col gap-5"
                >
                    <img
                        src="https://film.gov.np/media/filmgov/MV5BZWNkY2MxYzItYTUwMC00ODEzLTkyNDAtOGE5OWI3YjAwMzdiXkEyXkFqcGdeQXVyNTEwOTEz.jpg.400x400_q85_box-0%2C306%2C1387%2C1694_crop_detail.jpg"
                        alt="random-img"
                        class="object-cover h-[320px] w-auto z-50"
                    />
                    <div
                        class="timeline-item-redmarker relative h-[2px] bg-gray-300 w-full overflow-visible"
                    ></div>
                    <h1 class="text-2xl mt-2 font-semibold text-gray-400">
                        B.s 2060
                    </h1>
                    <h2 class="text-2xl font-semibold break-all">
                        First Nepali 3D film released
                    </h2>
                    <div id="timeline-cinema-hidden-content" class="hidden">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Officiis quo nulla ex eum ad repudiandae natus,
                        explicabo quaerat est nesciunt et repellendus enim omnis
                        porro ipsa ratione totam ducimus culpa.
                    </div>
                </li>
                <li
                    class="relative max-w-[300px] px-3 scroll-item cursor-pointer flex flex-col gap-5"
                >
                    <img
                        src="https://film.gov.np/media/filmgov/MV5BZWRhODIyNTEtNmM0Ni00OGM0LTk2Y2ItNDc3NmQxZDFiMjMwXkEyXkFqcGdeQXVyMjk4Mzk0NTc._V1_.jpg.400x400_q85_box-0%2C266%2C1280%2C1545_crop_detail.jpg"
                        alt="random-img"
                        class="object-cover h-[320px] w-auto z-50"
                    />
                    <div
                        class="timeline-item-redmarker relative h-[2px] bg-gray-300 w-full overflow-visible"
                    ></div>
                    <h1 class="text-2xl mt-2 font-semibold text-gray-400">
                        B.s 2052
                    </h1>
                    <h2 class="text-2xl font-semibold break-all">
                        Kalo pothi film released
                    </h2>
                    <div id="timeline-cinema-hidden-content" class="hidden">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Officiis quo nulla ex eum ad repudiandae natus,
                        explicabo quaerat est nesciunt et repellendus enim omnis
                        porro ipsa ratione totam ducimus culpa.
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- horizontal line  -->
    <div class="w-full h-[3px] bg-gray-300 my-20"></div>

    <div class="px-3 lg:px-6 mt-10">
        <div class="max-w-[1350px] mx-auto text-lg md:text-xl">
            <h1 class="text-3xl md:text-5xl font-semibold text-blue-500">Introduction</h1>
            <p style="color: rgb(85, 85, 85)" class="mt-8">
                Film Development Board (FDB) is established on 30 June 2000 by
                the Government of Nepal according to the existed Motion Picture
                (Production, Exhibition and Distribution) Act amended on 20th
                November 1991.
            </p>
            <p style="color: rgb(85, 85, 85)">
                The constitution of the Film Development Board was with the
                Government’s deep interest in development and promotion of
                motion picture sector in Nepal.
            </p>
            <p style="color: rgb(85, 85, 85)">
                It has obviously created an environment of supporting for the
                promotion of differential aspect of motion picture in Nepal. The
                Board thus, is indeed a liaison to facilitate the
                conceptualisation, making, distribution and exhibition of films
                in Nepal. It also attempts abridging the gap between the film
                entrepreneurship and the government processes. However, the
                Board is bound to take care of safety of the people and support
                to interest for the inspiring films of the common populace. The
                Board is in reality a balance among the people at large,
                government and the process of filmmaking. It is therefore, the
                safeguard of the interest of people, watchdog of government and
                facilitator of filmmakers.
            </p>
            <h3
                style="
                    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                    color: rgb(51, 51, 51);
                "
                class="mt-10 text-2xl"
            >
                <span class="text-blue-400">How is the Board?</span>
            </h3>
            <p style="color: rgb(85, 85, 85)" class="mt-3">
                The FDB is constituted as following:
            </p>
            <table
                class="mb-20"
                border="0"
                cellspacing="0"
                cellpadding="1"
                style="
                    background-color: rgb(255, 255, 255);
                    color: rgb(51, 51, 51);
                "
            >
                <tbody>
                    <tr>
                        <td width="125">• Chairperson</td>
                        <td width="230">Government of Nepal Nominee</td>
                    </tr>
                    <tr>
                        <td width="125">• Member</td>
                        <td width="230">
                            Representative, Ministry of Information and
                            Communications (MoIC)
                        </td>
                    </tr>
                    <tr>
                        <td width="125">• Member</td>
                        <td width="230">
                            Representative, Ministry of Finance (MoF)
                        </td>
                    </tr>
                    <tr>
                        <td width="125">• Members</td>
                        <td width="230">
                            Three MoIC nominees from among the persons of film
                            sector
                        </td>
                    </tr>
                    <tr>
                        <td width="125">• Member-Secretary</td>
                        <td width="230">Under-Secretary, MoIC</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- timeline content sidebar -->
<div
    class="absolute top-0 left-0 w-screen h-screen overflow-hidden z-100"
    id="timeline-content-wrapper"
>
    <!-- overlay -->
    <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>

    <div
        class="relative flex flex-col float-right items-center overflow-scroll gap-7 w-full md:max-w-[500px] h-max bg-gray-900 text-white px-7 md:px-15 py-20"
        id="timeline-content-sidebar"
    >
        <h1 id="timeline-content-title" class="text-2xl text-start"></h1>
        <h3 id="date" class="text-lg text-start"></h3>

        <div class="h-1 bg-gray-500 w-full"></div>

        <div id="timeline-content-image" class="w-full mx-auto">
            <img
                src=""
                alt="random-img"
                class="w-full max-w-[350px] mx-auto h-[300px] object-cover"
            />
        </div>
        <div id="timeline-content-hidden-content"></div>

        <!-- close button -->
        <button
            class="absolute top-5 right-5 z-10"
            id="timeline-content-close-button"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12"
                />
            </svg>
        </button>
    </div>
</div>
@endsection @push('scripts') @vite(['resources/js/about.js']) @endpush
