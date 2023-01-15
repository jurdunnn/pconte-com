<!doctype html>
<html  class="scroll-smooth">
    <head>
        <title>PConte</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>

        <livewire:styles />

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <style>
            body {
                font-family: 'Raleway', sans-serif;
            }
        </style>
    </head>
    <body x-cloak class="antialiased relative min-h-[100%] min-h-[100vh] dark:bg-gray-900 dark:text-gray-100 bg-gray-100 text-gray-900">
        @section('navigation-bar')
            <x-navigation-bar />
        @show

        @section('masthead-image')
            <div class="invisible relative overflow-hidden bg-no-repeat bg-cover"
                 style="background-position: 50%; background-image: url('https://mdbootstrap.com/img/new/textures/full/284.jpg'); height: 300px;">
            </div>
        @show

        @section('livewire')
            <div class="ml-auto mr-auto container px-4 md:px-12 text-gray-700 min-h-screen pb-24 lg:pb-0">
                <div class="block rounded-lg shadow-lg py-10 md:py-12 px-2 md:px-6"
                     style="margin-top: -200px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
                    @yield('livewire-content')
                </div>
            </div>
        @show

        @yield('content')

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
