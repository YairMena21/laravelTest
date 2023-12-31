<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <link rel="stylesheet" href="{{asset('/css/app.css')}}">
        
        <link rel="manifest" src="{{asset('js/manifest.json')}}">

        <script src="{{asset('js/app.js')}}" defer></script>
        <script src="{{asset('js/main.js')}}" defer ></script>
        <script src="{{asset('js/sw.js')}}" defer></script>

        {{--  @vite(['resources/css/app.css', 'resources/js/app.js'])  --}}
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
