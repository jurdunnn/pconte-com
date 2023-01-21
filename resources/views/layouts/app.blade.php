<!doctype html>
<html  class="scroll-smooth">
    <head>
        <title>{{ config('app.name') }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
        <livewire:styles />

        <link href="{{ asset('fontawesome/css/fontawesome.css') }}" rel="stylesheet">
        <link href="{{ asset('fontawesome/css/brands.css') }}" rel="stylesheet">
        <link href="{{ asset('fontawesome/css/solid.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <style>
            body {
                font-family: 'Raleway', sans-serif;
            }
        </style>
    </head>
    <body x-cloak class="antialiased relative w-full dark:bg-gray-700 dark:text-gray-100 bg-gray-100 text-gray-900">
        @section('navigation-bar')
            <x-navigation-bar />
        @show

        @section('masthead')
            <x-masthead />
        @show

        <main>
            @section('livewire')
                <div class="ml-auto mr-auto px-4 md:px-12 text-gray-700 pb-24 lg:pb-0">
                    <div class="block shadow-2xl py-10 md:py-12 px-2 md:px-6"
                         style="margin-top: -200px; background: hsla(0, 0%, 100%, 0.9); backdrop-filter: blur(90px);">
                        @yield('livewire-content')
                    </div>
                </div>
            @show

            @yield('content')
        </main>

        @section('footer')
            <a href="#footer" class="fixed md:hidden bottom-6 right-6">
                <div class="w-12 h-12 rounded-full shadow-lg bg-gray-700 dark:bg-gray-100 flex justify-center items-center">
                    <x-heroicon-s-arrow-small-down class="h-6 text-gray-100 dark:text-gray-700 hover:text-yellow-500" />
                </div>
            </a>

            <x-footer />
        @show

        <livewire:scripts />
    </body>
</html>
