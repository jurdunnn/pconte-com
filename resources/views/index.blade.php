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
        <x-tri-feature-block title="Services">
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
    </div>
@endsection
