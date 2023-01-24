@props(['color' => 'yellow', 'icon', 'size' => 'x2'])

<span class="text-{{ $color }}">
    <i class="fa-brands fa-{{ $icon }} fa-{{ $size }}"></i>
</span>
