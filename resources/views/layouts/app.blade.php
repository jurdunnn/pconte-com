<!doctype html>
<html  class="scroll-smooth">
    <head>
        <title>PConte</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
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

        @yield('content')
    </body>
</html>
