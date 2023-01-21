@props(['title' => null, 'subtitle' => null])

<div class="py-6">  
    <div class="m-auto px-6 md:px-12 xl:px-0">
        @if ($title && $subtitle)
            <x-title title="{{ $title }}" subtitle="{{ $subtitle }}" />
        @endif

        <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-3">
            {{ $slot }}
        </div>
    </div>
</div>
