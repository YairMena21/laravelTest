<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=10, user-scalble=no">
    <meta name="theme-color" content="#10161F">
    <meta name="movileOptimized" content="width">
    <meta name="handhelFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">


        <link rel="manifest" src="{{asset('/js/manifest.json')}}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <link rel="stylesheet" src="{{asset('./css/app.css')}}">
        <link rel="manifest" src="{{asset('./public/js/manifest.json')}}" defer>

        <script src="{{asset('./public/js/app.js')}}" defer></script>
        <script src="{{asset('./public/js/main.js')}}" defer ></script>
        <script src="{{asset('./public/js/sw.js')}}" defer></script>

        {{--  @vite(['resources/css/app.css', 'resources/js/app.js'])  --}}
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
