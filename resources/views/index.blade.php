@extends('layouts.app')

@section('livewire')
@endsection

@section('masthead')
    <x-masthead :title="['Conte\'s Domestic', 'Electrical Care']" subtitle="I am an experienced electrician with over 45 years of experience in domestic work. Skilled in all aspects of wiring, lighting, and appliance installation and repair. I pride myself in providing high-quality service and ensuring customer satisfaction. My expertise allows me to tackle any project with confidence and skill." />
@endsection

<!-- 
    Information about the company's qualifications and certifications, for example, NICEIC approved contractor, fully insured, and compliant with industry standards.
    A list of frequently asked questions and their answers
    A section on emergency services and 24/7 availability
    Tips and advice on energy efficiency and cost savings.
    Information on any special promotions or discounts currently available.
    A section on the company's history, experience, and qualifications of the electricians.
-->
@section('content')
    <div class="mt-8 md:mt-0 mobile-container md:container flex flex-col gap-y-24 text-gray-700 dark:text-gray-100">
        <div class="w-full md:hidden pb-12">
            <x-title title="About me" subtitle="My qualifications and motivations." icon="fa-solid fa-image-portrait" />

            <p class="text-center">
                <span class="text-yellow-500">
                    <i class="fa-solid fa-quote-left fa-lg"></i>
                </span>
                I am an experienced electrician with over 45 years of experience in domestic work. Skilled in all aspects of
                wiring, lighting, and appliance installation and repair. I pride myself in providing high-quality service and
                ensuring customer satisfaction. My expertise allows me to tackle any project with confidence and skill.
                <span class="text-yellow-500">
                    <i class="fa-solid fa-quote-right fa-lg"></i>
                </span>
            </p>
        </div>

        <div class="py-6">
            <x-title title="Pricing" subtitle="What I charge for my services" icon="fa-solid fa-coins" />

            <div class="bg-white dark:bg-gray-800 shadow-2xl px-8 w-full py-12 sm:px-12 lg:px-8">
                <div class="flex flex-col lg:flex-row gap-y-4 gap-x-4">
                    <div class="relative flex flex-col gap-y-8 text-center border-b-2 lg:border-b-0 lg:border-r-2 border-gray-200 dark:border-gray-600 w-full px-4">
                        <h3 class="text-2xl font-semibold text-yellow-500 py-2">Regular Callout Charge</h3>
                        <p class="max-w-sm pb-24 text-center lg:text-left mr-auto ml-auto">
                            This is a fee I will charge for responding to a service call or visit to a customer's location.
                            This fee may cover costs such as transportation, materials, and labor associated
                            with the visit. 
                        </p>

                        <div class="absolute bottom-0 left-[50%] -translate-x-[50%] flex gap-x-3 py-6 md:py-2">
                            <span class="text-yellow-500">
                                <i class="fa-solid fa-sterling-sign fa-2x"></i>
                            </span>
                            <h3 class="text-2xl font-bold text-yellow-500 leading-[2rem] text-3xl">50</h3>
                        </div>
                    </div>

                    <div class="relative flex flex-col gap-y-8 text-center border-b-2 lg:border-b-0 lg:border-r-2 border-gray-200 dark:border-gray-600 w-full px-4">
                        <h3 class="text-2xl font-semibold text-yellow-500 py-2">Out-of-Hours Rate</h3>
                        <p class="max-w-sm pb-24 text-center lg:text-left mr-auto ml-auto">
                            This may include evenings, weekends, or holidays. Electricians may charge an out of hours
                            rate as a means of compensating for the inconvenience and additional costs associated with
                            working during non-business hours, such as higher labor costs. 
                        </p>

                        <div class="absolute bottom-0 left-[50%] -translate-x-[50%] flex gap-x-3 py-6 md:py-2">
                            <span class="text-yellow-500">
                                <i class="fa-solid fa-sterling-sign fa-2x"></i>
                            </span>
                            <h3 class="text-2xl font-bold text-yellow-500 leading-[2rem] text-3xl">
                                80
                                <span class="font-semibold text-sm"> ph</span>
                            </h3>
                        </div>
                    </div>

                    <div class="relative flex flex-col gap-y-8 text-center w-full px-4">
                        <h3 class="text-2xl font-semibold text-yellow-500 py-2">Regular Rate</h3>
                        <p class="max-w-sm pb-24 text-center lg:text-left mr-auto ml-auto">
                            The regular rate is the fee that is charged for the actual work done, after the call out
                            fee is paid, if any. This rate is usually based on the time spent on the job and may include
                            the cost of materials as well.
                        </p>

                        <div class="absolute bottom-0 left-[50%] -translate-x-[50%] flex gap-x-3 py-6 md:py-2">
                            <span class="text-yellow-500">
                                <i class="fa-solid fa-sterling-sign fa-2x"></i>
                            </span>
                            <h3 class="text-2xl font-bold text-yellow-500 leading-[2rem] text-3xl">
                                60
                                <span class="font-semibold text-sm"> ph</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-tri-feature-block icon="fa-solid fa-plug" title="Services" subtitle="Services I can perform for you.">
            <x-tri-feature-block-item icon="fa-solid fa-hammer" iconSize="fa-4x" iconColor="text-gray-700 dark:text-gray-100" link="{{ route('services') }}" title="Electrical Installation">
                I will be installing new electrical systems and components in a home, following 
                safety regulations and building codes, to ensure proper functioning and safety.
            </x-tri-feature-block-item>

            <x-tri-feature-block-item icon="fa-solid fa-toolbox" iconSize="fa-4x" iconColor="text-gray-700 dark:text-gray-100" :featured="true" link="{{ route('services') }}" title="Emergency Callouts">
                I will be responding to urgent issues with electrical systems and components in a home, such
                as power outages or electrical hazards, to ensure safety and restore power quickly.
            </x-tri-feature-block-item>

            <x-tri-feature-block-item icon="fa-solid fa-wrench" iconSize="fa-4x" iconColor="text-gray-700 dark:text-gray-100" link="{{ route('services') }}" title="Maintenance">
                I will provide regular inspections and upkeep of electrical systems and components 
                in a home, to ensure safety and prevent future breakdowns.
            </x-tri-feature-block-item>
        </x-tri-feature-block>

        @if($testimonials)
            <div class="py-6">
                <x-title title="Testimonials" icon="fa-solid fa-star" subtitle="What my clients say about me." />

                <div class="flex flex-col gap-y-6 lg:flex-row lg:gap-x-6">
                    @foreach ($testimonials as $testimonial)
                        <div class="bg-white dark:bg-gray-800 shadow-2xl px-8 w-full py-12 sm:px-12 lg:px-8">
                            <div class="flex gap-x-4">
                                <span class="text-yellow-500">
                                    <i class="fa-solid fa-quote-right fa-lg"></i>
                                </span>
                                <h3 class="text-2xl font-semibold text-yellow-500">{{ $testimonial->name }}</h3>
                            </div>

                            <div class="mt-8 space-y-4">
                                <p class="mb-6">{{ $testimonial->testimonial }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="flex flex-col gap-y-2 pt-12">
                    <h3 class="text-center py-4 text-sm font-light max-w-sm ml-auto mr-auto">
                        Contact us to book a telephone consultation and receive a quote.
                    </h3>

                    <a type="button" href="{{ route('contact') }}" class="py-4 px-8 bg-yellow-500 hover:bg-yellow-400 shadow-xl font-semibold max-w-lg min-w-lg text-center ml-auto mr-auto">Get a Quote</a>
                </div>
            </div>
        @endif
    </div>
@endsection
