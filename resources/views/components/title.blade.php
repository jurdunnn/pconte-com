@props(['title', 'subtitle', 'icon' => null,])

<div class="flex flex-col gap-y-2 py-12">
    <span class="text-yellow-500 ml-auto mr-auto">
        <i class="{{ $icon }}"></i>
    </span>

    <p class="text-center text-yellow-500 text-sm font-light">{{ $title }}</p>

    <h2 class="text-center text-2xl font-semibold">{{ $subtitle }}</h2>
</div>
