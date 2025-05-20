@extends('main') @section('title', 'Ex. Members') @section('content')

        <div class="my-25 flex flex-wrap justify-center px-3 gap-10 lg:px-6">
            @foreach($exMembers as $exMember)
                <div class="flex flex-col items-center justify-between gap-4 w-full max-w-[400px] md:flex-1/2  lg:flex-1/3 px-3 py-10 shadow-xl">
                        <img src="{{$exMember->imgSrc}}" alt="member-image" class="w-full aspect-square max-w-[200px] h-[200px] rounded-full object-cover">
                        <h1 class="text-blue-400 font-normal text-2xl">{{$exMember->name}}</h1>
                        <h2 class="font-normal text-xl break-all">{{$exMember->position}}</h2>
                        <p class="text-md text-gray-500"><span class="font-semibold mr-3">&#9993;</span>{{$exMember->email}}</p>
                </div>
            @endforeach
        </div>
@endsection
