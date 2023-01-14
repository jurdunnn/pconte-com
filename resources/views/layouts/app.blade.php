<!doctype html>
<html  class="scroll-smooth">
    <head>
        <title>PConte</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>

        <livewire:styles />
    </head>
    <body x-cloak class="antialiased dark:bg-gray-900 dark:text-gray-100 bg-gray-100 text-gray-900">
        @section('navigation-bar')
            <x-navigation-bar />
        @show

        @section('masthead-image')
            <div class="relative overflow-hidden bg-no-repeat bg-cover"
                 style="background-position: 50%; background-image: url('https://mdbootstrap.com/img/new/textures/full/284.jpg'); height: 300px;">
            </div>
        @show

        <div class="ml-auto mr-auto container px-4 md:px-12 text-gray-700">
            <div class="block rounded-lg shadow-lg py-10 md:py-12 px-2 md:px-6"
                 style="margin-top: -200px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
                @yield('livewire-content')

            </div>
        </div>

        @yield('content')

        @section('footer')
            <x-footer />
        @show

        <livewire:scripts />
    </body>
</html>
