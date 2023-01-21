@props(['title', 'featured' => false, 'icon' => null, 'iconColor' => null, 'iconSize' => null,])

<div class="@if($featured) bg-white dark:bg-gray-800 shadow-2xl @endif text-center md:text-left px-8 py-12 sm:px-12 lg:px-8">
    @if($icon)
        <span class="{{ $iconColor }}">
            <i class="{{ $icon }} {{ $iconSize }}"></i>
        </span>
    @endif
    <div class="mt-8 space-y-4">
        <h3 class="text-2xl font-semibold text-yellow-500">{{ $title }}</h3>
        <p class="mb-6">{{ $slot }}</p>
        <a href="{{ route('services') }}#installation" class="block font-medium text-yellow-500">Know more</a>
    </div>
</div>
