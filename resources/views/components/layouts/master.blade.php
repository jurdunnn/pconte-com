<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased dark:bg-gray-900 dark:text-gray-100 bg-gray-100 text-gray-900">
        <x-navigation-bar />

        {{ $slot }}

    </body>
</html>
