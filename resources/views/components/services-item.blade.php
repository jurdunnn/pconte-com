@props(['number' => null, 'title' => null,])

<li class="flex hover:text-yellow-600 dark:hover:text-yellow-500">
    <div class="px-4 text-5xl font-extralight">{{ $number }}</div>
    <div>
        <div class="text-xl font-bold">{{ $title }}</div>
        <p class="max-w-xs py-2 text-sm">{{ $slot }}</p>
    </div>
</li>
