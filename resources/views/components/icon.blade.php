@props(['color' => 'yellow', 'icon', 'size' => 'x2'])

<span class="text-{{ $color }}">
    <i class="fa-solid fa-{{ $icon }} fa-{{ $size }}"></i>
</span>
