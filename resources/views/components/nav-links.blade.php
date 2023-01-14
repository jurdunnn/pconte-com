<ul class="navbar-nav ml-auto flex flex-col font-semibold pl-0 list-style-none">
    <li class="nav-item py-9 px-4 @if (Route::is('services')) bg-black bg-opacity-25 text-yellow-500 @else text-white hover:text-yellow-500 @endif">
        <a class="nav-link" href="{{ route('services') }}">Services</a>
    </li>
    <li class="nav-item py-9 px-4 @if (Route::is('testimonials')) bg-black bg-opacity-25 text-yellow-500 @else text-white hover:text-yellow-500 @endif">
        <a class="nav-link p-0 " href="{{ route('testimonials') }}" >Testimonials</a>
    </li>
    <li class="nav-item py-9 px-4 mr-2 @if (Route::is('contact')) bg-black bg-opacity-25 text-yellow-500 @else text-white hover:text-yellow-500 @endif">
        <a class="nav-link p-0" href="{{ route('contact') }}" >Contact</a>
    </li>
</ul>
