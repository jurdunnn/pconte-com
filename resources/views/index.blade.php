@extends('layouts.app')

@section('masthead-image')
@endsection

@section('livewire-content')
@endsection

@section('content')
    <div class="absolute flex flex-col text-5xl text-white top-4 md:top-1/2 left-1/2 gap-y-6 -translate-x-1/2 md:-translate-y-[19rem]">

        <h1 class="font-semibold ml-auto mr-auto mt-24 text-center">Conte's Domestic Electrical Care</h1>

        <div class="hidden lg:block">
            <x-divider />
        </div>


        <!--Laptop and up -->
        <p class="font-light mt-4 leading-8 text-center hidden lg:block text-lg lg:text-xl">
            With over 45 years of experience, I am a highly skilled and knowledgeable professional who is dedicated to
            providing the highest level of service to my clients. I am well-versed in all aspects of domestic electrical 
            work, including wiring, lighting, and appliance installation and repair. My extensive experience and expertise
            enable me to tackle even the most complex projects with confidence and skill. I am well-equipped to handle any
            electrical need that may arise in a domestic setting, and I always strive to ensure that my clients are
            completely satisfied with the work that I do.
        </p>

        <!--Tablet and up -->
        <div class="hidden sm:block">
            <p class="font-light mt-4 leading-8 text-center block lg:hidden text-lg">
                I am an experienced electrician with over 45 years of experience in domestic work. Skilled in all aspects of
                wiring, lighting, and appliance installation and repair. I pride myself in providing high-quality service and
                ensuring customer satisfaction. My expertise allows me to tackle any project with confidence and skill.        
            </p>
        </div>

        <!--Mobile and up -->
        <p class="font-light mt-2 leading-6 text-center block sm:hidden text-lg">
            Experienced electrician with 45 years of domestic work experience. Skilled in all areas, committed
            to quality service.
        </p>

        <a
            href="{{ route('contact') }}"
            class="inline-flex items-center mt-4 xl:mt-12 ml-auto mr-auto rounded-md border border-transparent bg-yellow-600 px-12 py-3 text-base font-medium text-white shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2"
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
