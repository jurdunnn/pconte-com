<nav
    class="relative w-full flex flex-wrap items-center justify-between bg-gray-700 dark:bg-gray-800 text-gray-200 shadow-lg navbar navbar-expand-lg navbar-light"
    >
    <div class="container-fluid h-full w-full  flex flex-wrap items-center justify-between px-20">
        <div class="collapse navbar-collapse flex-grow items-center" id="navbarSupportedContent1">
            <a class="text-xl text-white pr-2 font-bold" href="{{ route('index') }}">Pconte</a>

            <x-nav-links />
        </div>

        <div class="collapse navbar-collapse flex items-center relative">
            <div class="relative mr-4">
                <x-night-switch />
            </div>
            <a
                class="text-white opacity-60 hover:opacity-80 focus:opacity-80 dropdown-toggle hidden-arrow flex items-center"
                href="#"
                role="button"
                >
                <x-heroicon-o-cog-8-tooth class="h-6 hover:text-yellow-500" />
            </a>
        </div>
    </div>
</nav>
