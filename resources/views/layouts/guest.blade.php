<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Agoda') }}</title>
        {{-- Favicon --}}
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicon_io/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicon_io/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicon_io/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('assets/img/favicon_io/site.webmanifest')}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 " style="background-color: rgb(0,131,173);">
            <div>
                <a href="/">
                    <img src="{{asset('assets/img/agoda.svg')}}" alt="Agoda Job Platform" width="100" height="100">
                    {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                
                @include('message.flash-message')
                {{ $slot }}
            </div>
        </div>

        <script src="{{asset('assets/js/index.js')}}" async defer></script>
    </body>
</html>
