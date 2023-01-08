<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
         @vite('resources/css/app.css')

        <title>{{config('app.name')}}/{{isset($title) ? $title : ''}}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <style>
        body {
        font-family: 'Nunito', sans-serif;
        }
        </style>
        <!-- css tailwind (En Dev  secure_asset devient  secure_asset)-->
        <link media="all" href="{{secure_asset('css/app.css')}}" type="text/css" rel="stylesheet">
    </head>
    <body class="font-sans antialiased m-0 p-0">
        <div class="flex flex-col h-screen w-screen" style="overflow-x: hidden">
            @yield('content')
        </div>
        <script  
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
        </script>  
        <!-- (En Dev  secure_asset devient  secure_asset)-->
        <script src="{{secure_asset('js/app.js') }}" defer></script>
        <script src="{{secure_asset('js/flash.js') }}" defer></script>
        <script src="{{secure_asset('js/larails.js') }}" defer></script>
    </body>
</html>



