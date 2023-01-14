@extends('layouts.app')

@section('masthead-image')
@endsection

@section('content')
    <div class="absolute flex flex-col text-5xl text-white top-1/2 left-1/2 gap-y-6 -translate-x-1/2 -translate-y-[19rem]">
        <div class="relative ml-auto mr-auto w-24 h-24">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
            </svg>
        </div>

        <h1 class="font-semibold ml-auto mr-auto">45 Years Experience</h1>

        <div class="relative grid grid-cols-5 gap-x-1 w-1/3 ml-auto mr-auto">
            <div class="flex items-center col-span-2" aria-hidden="true">
                <div class="w-full border-t border-yellow-500"></div>
            </div>

            <div class="relative flex justify-center">
                <span class="bg-white bg-opacity-0 text-yellow-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                    </svg>

                </span>
            </div>

            <div class="flex items-center col-span-2" aria-hidden="true">
                <div class="w-full border-t border-yellow-500"></div>
            </div>
        </div>

        <p class="text-[1.5rem] font-light mt-4 leading-8 text-center">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat.
        </p>
        <button
            type="button"
            class="inline-flex items-center mt-12 ml-auto mr-auto rounded-md border border-transparent bg-yellow-600 px-12 py-3 text-base font-medium text-white shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2"
            >
            Request a quote
        </button>
    </div>

    <div class="absolute top-0 left-0 -z-50 min-h-screen overflow-hidden">
        <img src="{{ asset('images/image') }}" class="min-w-screen min-h-screen object-none" />
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed bg-gray-600 dark:bg-black opacity-80"></div>
    </div>
@endsection
