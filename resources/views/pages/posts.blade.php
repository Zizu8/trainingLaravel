@extends('layouts.app')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

@section('content')

    <div style="width: 900px;" class="container max-w-full mx-auto pt-10">

        <h1 class="text-4xl font-bold mb-4">ALL EMPLOYEES</h1>
        <a href="/posts/create" class="bg-blue-500 tracking-wide 
            text-white px-6 py-2 inline-block mb-6 shadow-lg 
            rounded hover:shadow my-4">
                NEW EMPLOYEE
            </a>

        @foreach ($posts as $post)
            <article class="mb-5">
                <ul>
                    <li>
                        <a href="/posts/{{$post->id}}/edit" class="text-xl font-bold text-blue-500">{{$post->firstname}}</a>
                    </li>
                    <li>
                        <a href="/posts/{{$post->id}}/edit" class="text-xl font-bold text-blue-900">{{$post->lastname}}</a>
                    </li>
                    <hr class="mt-2">
                </ul>
            </article>
        @endforeach
    </div>

@endsection