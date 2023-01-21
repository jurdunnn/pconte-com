@extends('layouts.app')

@section('livewire')
@endsection

@section('masthead')
    <x-masthead :title="['Contes Domestic', 'Electrical Care']" subtitle="I am an experienced electrician with over 45 years of experience in domestic work. Skilled in all aspects of wiring, lighting, and appliance installation and repair. I pride myself in providing high-quality service and ensuring customer satisfaction. My expertise allows me to tackle any project with confidence and skill." />
@endsection

<!-- 
    Information about the company's qualifications and certifications, for example, NICEIC approved contractor, fully insured, and compliant with industry standards.
    Testimonials or reviews from satisfied customers.
    A contact form or phone number for easy communication with the company.
    A list of frequently asked questions and their answers
    A section on emergency services and 24/7 availability
    Tips and advice on energy efficiency and cost savings.
    Information on any special promotions or discounts currently available.
    A section on the company's history, experience, and qualifications of the electricians.
-->
@section('content')
    <div class="mobile-container md:container text-gray-700 dark:text-gray-100">
        <x-tri-feature-block>
            <x-tri-feature-block-item icon="fa-solid fa-hammer" iconSize="fa-4x" iconColor="text-gray-700 dark:text-gray-100" title="Electrical Installation">
                I will be installing new electrical systems and components in a home, following 
                safety regulations and building codes, to ensure proper functioning and safety.
            </x-tri-feature-block-item>

            <x-tri-feature-block-item icon="fa-solid fa-toolbox" iconSize="fa-4x" iconColor="text-gray-700 dark:text-gray-100" :featured="true" title="Emergency Callouts">
                I will be responding to urgent issues with electrical systems and components in a home, such
                as power outages or electrical hazards, to ensure safety and restore power quickly.
            </x-tri-feature-block-item>

            <x-tri-feature-block-item icon="fa-solid fa-wrench" iconSize="fa-4x" iconColor="text-gray-700 dark:text-gray-100" title="Maintenance">
                I will provide regular inspections and upkeep of electrical systems and components 
                in a home, to ensure safety and prevent future breakdowns.
            </x-tri-feature-block-item>
        </x-tri-feature-block>

        <div class="mt-12 py-6">
            <x-title title="Testimonials" subtitle="What my clients say about me." />

            <div class="flex flex-col gap-y-6 lg:flex-row lg:gap-x-6">
                <div class="bg-white dark:bg-gray-800 shadow-2xl px-8 w-full py-12 sm:px-12 lg:px-8">
                    <div class="flex gap-x-4">
                        <span class="text-yellow-500">
                            <i class="fa-solid fa-quote-right fa-lg"></i>
                        </span>
                        <h3 class="text-2xl font-semibold text-yellow-500">Sarah Palin</h3>
                    </div>

                    <div class="mt-8 space-y-4">
                        <p class="mb-6">some text sdfjkks dfs dfs dfsd fsdf sdfksdfksdfsdfk sdf sdf </p>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-2xl px-8 w-full py-12 sm:px-12 lg:px-8">
                    <div class="flex gap-x-4">
                        <span class="text-yellow-500">
                            <i class="fa-solid fa-quote-right fa-lg"></i>
                        </span>
                        <h3 class="text-2xl font-semibold text-yellow-500">Sarah Palin</h3>
                    </div>

                    <div class="mt-8 space-y-4">
                        <p class="mb-6">some text sdfjkks dfs dfs dfsd fsdf sdfksdfksdfsdfk sdf sdf </p>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-2xl px-8 w-full py-12 sm:px-12 lg:px-8">
                    <div class="flex gap-x-4">
                        <span class="text-yellow-500">
                            <i class="fa-solid fa-quote-right fa-lg"></i>
                        </span>
                        <h3 class="text-2xl font-semibold text-yellow-500">Sarah Palin</h3>
                    </div>

                    <div class="mt-8 space-y-4">
                        <p class="mb-6">some text sdfjkks dfs dfs dfsd fsdf sdfksdfksdfsdfk sdf sdf </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-y-2 py-12">
                <h3 class="text-center py-4 text-sm font-light max-w-sm ml-auto mr-auto">
                    Contact us to book a telephone consultation and receive a quote.
                </h3>

                <a type="button" href="{{ route('contact') }}" class="py-4 px-8 bg-yellow-500 hover:bg-yellow-400 shadow-xl font-semibold max-w-lg min-w-lg text-center ml-auto mr-auto">Get a Quote</a>
            </div>
        </div>
    </div>
@endsection
