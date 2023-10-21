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
        <link rel="stylesheet" href="{{asset('/css/app.css')}}">
        <script href="{{asset('/js/app.js')}}" defer></script>
        <link rel="manifest" href="{{asset('/manifest.json')}}">
        <script type="text/javascript" src="{{asset('/main.js')}}"></script>
        <script type="text/javascript" src="{{asset('/sw.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/app.js')}}" defer></script>

        <!-- amcharts -->
        <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>

        {{--  @vite(['resources/css/app.css', 'resources/js/app.js'])  --}}
    </head>

    <body>
        <div id=app>
            <main>
                @yield('content')
            </main>
        </div>
    </body>
    </html>