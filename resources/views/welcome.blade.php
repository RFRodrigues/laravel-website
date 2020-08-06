<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
        <div class="flex bg-gray-400 h-screen">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content m-auto">
                <div class="title m-b-md text-center">
                    Laravel
                </div>

                <div>
                    <a class="link bg-blue-500" href="https://laravel.com/docs">Docs</a>
                    <a class="link" href="https://laracasts.com">Laracasts</a>
                    <a class="link" href="https://laravel-news.com">News</a>
                    <a class="link" href="https://blog.laravel.com">Blog</a>
                    <a class="link" href="https://nova.laravel.com">Nova</a>
                    <a class="link" href="https://forge.laravel.com">Forge</a>
                    <a class="link" href="https://vapor.laravel.com">Vapor</a>
                    <a class="link" href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
