@extends('layouts.app')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

@section('content')

    <div style="width: 900px;" class="container max-w-full mx-auto pt-10">
        <form method="POST" action="/posts/{{$post->id}}">            
            @method('PUT')
            @csrf
            <div class="mb-4">
                <label class="front-bold text-blue-600" for="firstname">
                    Firstname
                </label>
                <input class="h-10 bg-white border border-gray-300 rounded 
                py-4 px-3 mr-4 w-full text-gray-600 text-sm 
                focus:outline-none focus:border-gray-400 
                focus:ring-0" id="firstname" name="firstname" value="{{$post->firstname}}">
            </div>
            <div class="mb-4">
                <label class="front-bold text-blue-600" for="lastname">
                    Lastname
                </label>
                <input class="h-10 bg-white border border-gray-300 rounded 
                py-4 px-3 mr-4 w-full text-gray-600 text-sm 
                focus:outline-none focus:border-gray-400 
                focus:ring-0" id="lastname" name="lastname" value="{{$post->lastname}}">
            </div>
            <button class="bg-blue-500 tracking-wide 
            text-white px-6 py-2 inline-block mb-6 shadow-lg 
            rounded hover:shadow">
                UPDATE
            </button>
            <a href="/posts" class="bg-gray-500 tracking-wide 
            text-white px-6 py-2 inline-block mb-6 shadow-lg 
            rounded hover:shadow">
                CANCEL
    </a>
    <form action="/posts/{{$post->id}}">
        
        @csrf
        @method('DELETE')

        <button href="/posts" class="ML-4 bg-red-500 tracking-wide 
            text-white px-6 py-2 inline-block mb-6 shadow-lg 
            rounded hover:shadow">
                DELETE
        </button>
    </form>

        </form>
    </div>

@endsection