@props(['title' => null,])

<div class="p-4 text-gray-600 dark:text-gray-200 py-12 select-none">
    <h1 class="mb-8 text-center mx-auto text-3xl font-bold">{{ $title }}</h1>

    <ul class="grid place-content-center grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        {{ $slot }}
    </ul>
</div>
