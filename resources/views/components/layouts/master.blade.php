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
        <x-navigation-bar />

        {{ $slot }}

    </body>
</html>
