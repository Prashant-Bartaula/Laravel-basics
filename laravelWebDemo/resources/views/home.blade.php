{{-- home blade  --}}
{{-- @extends tells this blade to use the main blade --}}
@extends('main')

{{-- @section Used in a child view to define what should go into the sections created by @yield in the layout.  --}}
@section('title', 'Home page')

@section('hero')
    <div>
        <h1>Home page</h1>
        <p>it has dynamic contents</p>
    </div>
@endsection