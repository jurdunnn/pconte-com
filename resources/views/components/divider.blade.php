@props(['width' => '1/3'])

<div class="relative grid grid-cols-5 gap-x-1 w-{{ $width }} ml-auto mr-auto">
    <div class="flex items-center col-span-2" aria-hidden="true">
        <div class="w-full border-t border-yellow-500"></div>
    </div>

    <div class="relative flex justify-center">
        <span class="bg-white bg-opacity-0 text-yellow-500">
            <x-heroicon-o-bolt class="w-8 h-8" />
        </span>
    </div>

    <div class="flex items-center col-span-2" aria-hidden="true">
        <div class="w-full border-t border-yellow-500"></div>
    </div>
</div>
