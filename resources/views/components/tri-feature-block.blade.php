@props(['title' => null, 'subtitle' => null, 'additionalClasses' => '', 'icon' => null,])

<div class="py-6 {{ $additionalClasses }}">  
    <div class="m-auto">
        @if ($title && $subtitle)
            <x-title icon="{{ $icon }}" title="{{ $title }}" subtitle="{{ $subtitle }}" />
        @endif

        <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-3">
            {{ $slot }}
        </div>
    </div>
</div>
