@extends('layouts.app')

@section('masthead-image')
@endsection

@section('content')
    <div class="absolute flex flex-col text-5xl text-white top-4 md:top-1/2 left-1/2 gap-y-6 -translate-x-1/2 md:-translate-y-[19rem]">
        <div class="relative ml-auto mr-auto w-24 h-24">
            <x-heroicon-o-sun class="w-full h-full" />
        </div>

        <h1 class="font-semibold ml-auto mr-auto text-center">45 Years Experience</h1>

        <div class="relative grid grid-cols-5 gap-x-1 w-1/3 ml-auto mr-auto">
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

        <p class="font-light mt-4 leading-8 text-center text-lg lg:text-xl">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat.
        </p>
        <a
            href="{{ route('contact') }}"
            class="inline-flex items-center mt-12 ml-auto mr-auto rounded-md border border-transparent bg-yellow-600 px-12 py-3 text-base font-medium text-white shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2"
            >
            Get a quote!
        </a>
    </div>

    <div class="absolute top-0 left-0 -z-50 min-h-screen overflow-hidden">
        <img src="{{ asset('images/image') }}" class="min-w-screen min-h-screen object-none" />
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed bg-gray-600 dark:bg-black opacity-80"></div>
    </div>
@endsection

@section('footer')
@endsection
