<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased dark:bg-gray-900 dark:text-gray-100 bg-gray-100 text-gray-900">
        <x-navigation-bar></x-navigation-bar>

        <h1 class="z-12">
            hello world
        </h1>

        <div class="relative overflow-hidden bg-no-repeat bg-cover" style="background-position: 50%;">
            <img src="{{ asset('images/image') }}" class="" />
            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed bg-gray-700 dark:bg-black opacity-80"></div>
        </div>
    </body>
</html>
