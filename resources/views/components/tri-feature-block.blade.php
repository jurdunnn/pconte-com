@props(['title'])

<div class="py-6">  
    <div class="m-auto px-6 md:px-12 xl:px-0">
        <h2 class="hidden md:block font-bold ml-auto mr-auto py-8 text-yellow-500 text-center text-5xl max-w-md">{{ $title }}</h2>
        <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-3">
            {{ $slot }}
        </div>
    </div>
</div>
