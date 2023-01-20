@props(['title' => null, 'yellowTitle' => null, 'subtitle' => null, 'backgroundColor' => null,])


<div class="relative {{ $backgroundColor }}">
    <div class="min-h-[10vh] dark:bg-gray-800 bg-gray-700 -z-50"></div>
    <div class="min-h-[20vh] dark:bg-gray-800 bg-gray-700 rounded-bl-full -z-50"></div>

    @if (($title || $yellowTitle) && $subtitle)
        <div class="absolute top-0 left-0 md:left-1/2 md:-translate-x-1/2 w-3/4 ml-24 text-white">
            <div class="grid grid-cols-2 gap-12 ">
                <h1 class="font-semibold ml-auto mr-auto mt-12 text-center text-5xl max-w-md">
                    {{ $title[0] }}

                    <span class="text-yellow-500">
                        {{ $title[1] }}
                    </span>
                </h1>
                <p class="max-h-[20vh] overflow-hidden font-light mt-12 leading-8 text-center hidden lg:block text-lg lg:text-md max-w-lg border-l-2 px-8">
                    {{ $subtitle }}
                </p>
            </div>
        </div>
    @endif
</div>
