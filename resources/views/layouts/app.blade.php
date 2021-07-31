<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <title>{{config('app.name', 'zizu.sa')}}</title>
    </head>
    <header>
        <div style="width: 900px;" class="container max-w-full mx-auto pt-5">
            <img src="" alt="" title="">
            <ul>
                <li>
                    <a href="/" class=" {{ request()->is('/' ? 'visited' : '')}} text-4xl font-bold mb-4 text-green-700">HOME</a>
                </li>
                <li>
                    <a href="/posts" class=" {{ request()->is('/posts' ? 'active' : '')}} text-4xl font-bold mb-4 text-green-700">EMPLOYEES</a>
                </li>
                <li>
                    <a href="/posts/create" class=" {{ request()->is('/posts/create' ? 'active' : '')}} text-4xl font-bold mb-4 text-green-700">ADD EMPLOYEE</a>
                </li>
            </ul>
        </div>
    </header>
    <body>
        <div style="width: 900px;" class="container max-w-full mx-auto pt-10">
            @yield('content')
        </div>
    </body>
    <footer>
        <div style="width: 900px;" class="container max-w-full mx-auto pt-10">
            <img src="" alt="" title="">
            <p>
                email: z.n.alotaibi@hotmail.com
            </p>
        </div>
    </footer>
</html>