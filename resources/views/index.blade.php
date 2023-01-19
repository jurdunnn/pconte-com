@extends('layouts.app')

@section('livewire')
@endsection

@section('masthead')
    <x-masthead :title="['Contes Domestic', 'Electrical Care']" subtitle="I am an experienced electrician with over 45 years of experience in domestic work. Skilled in all aspects of wiring, lighting, and appliance installation and repair. I pride myself in providing high-quality service and ensuring customer satisfaction. My expertise allows me to tackle any project with confidence and skill." />
@endsection

<!-- 
    A list of the services offered such as electrical installation, repairs, and maintenance.
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
    <div class="min-h-[100%] min-h-[100vh] mobile-container md:container text-gray-700 dark:text-gray-100">
        <div class="py-6">  
            <div class="m-auto px-6 md:px-12 xl:px-0">
                <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-3">
                    <div class="px-8 py-12 sm:px-12 lg:px-8">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor" class="w-16">
                            <path d="M413.5 237.5c-28.2 4.8-58.2-3.6-80-25.4l-38.1-38.1C280.4 159 272 138.8 272 117.6V105.5L192.3 62c-5.3-2.9-8.6-8.6-8.3-14.7s3.9-11.5 9.5-14l47.2-21C259.1 4.2 279 0 299.2 0h18.1c36.7 0 72 14 98.7 39.1l44.6 42c24.2 22.8 33.2 55.7 26.6 86L503 183l8-8c9.4-9.4 24.6-9.4 33.9 0l24 24c9.4 9.4 9.4 24.6 0 33.9l-88 88c-9.4 9.4-24.6 9.4-33.9 0l-24-24c-9.4-9.4-9.4-24.6 0-33.9l8-8-17.5-17.5zM27.4 377.1L260.9 182.6c3.5 4.9 7.5 9.6 11.8 14l38.1 38.1c6 6 12.4 11.2 19.2 15.7L134.9 484.6c-14.5 17.4-36 27.4-58.6 27.4C34.1 512 0 477.8 0 435.7c0-22.6 10.1-44.1 27.4-58.6z"/>
                        </svg>
                        <div class="mt-8 space-y-4">
                            <h3 class="text-2xl font-semibold text-yellow-500">Electrical Installation</h3>
                            <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.</p>
                            <a href="#" class="block font-medium text-yellow-500">Know more</a>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl px-8 py-12 sm:px-12 lg:px-8">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-16">
                            <path d="M176 88v40H336V88c0-4.4-3.6-8-8-8H184c-4.4 0-8 3.6-8 8zm-48 40V88c0-30.9 25.1-56 56-56H328c30.9 0 56 25.1 56 56v40h28.1c12.7 0 24.9 5.1 33.9 14.1l51.9 51.9c9 9 14.1 21.2 14.1 33.9V304H384V288c0-17.7-14.3-32-32-32s-32 14.3-32 32v16H192V288c0-17.7-14.3-32-32-32s-32 14.3-32 32v16H0V227.9c0-12.7 5.1-24.9 14.1-33.9l51.9-51.9c9-9 21.2-14.1 33.9-14.1H128zM0 416V336H128v16c0 17.7 14.3 32 32 32s32-14.3 32-32V336H320v16c0 17.7 14.3 32 32 32s32-14.3 32-32V336H512v80c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64z"/>
                        </svg>
                        <div class="mt-8 space-y-4">
                            <h3 class="text-2xl font-semibold text-yellow-500">Repairs</h3>
                            <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.</p>
                            <a href="#" class="block font-medium text-yellow-500">Know more</a>
                        </div>
                    </div>

                    <div class="px-8 py-12 sm:px-12 lg:px-8">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-16 -rotate-90">
                            <path d="M352 320c88.4 0 160-71.6 160-160c0-15.3-2.2-30.1-6.2-44.2c-3.1-10.8-16.4-13.2-24.3-5.3l-76.8 76.8c-3 3-7.1 4.7-11.3 4.7H336c-8.8 0-16-7.2-16-16V118.6c0-4.2 1.7-8.3 4.7-11.3l76.8-76.8c7.9-7.9 5.4-21.2-5.3-24.3C382.1 2.2 367.3 0 352 0C263.6 0 192 71.6 192 160c0 19.1 3.4 37.5 9.5 54.5L19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L297.5 310.5c17 6.2 35.4 9.5 54.5 9.5zM80 456c-13.3 0-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24s-10.7 24-24 24z"/>
                        </svg>
                        <div class="mt-8 space-y-4">
                            <h3 class="text-2xl font-semibold text-yellow-500">Maintenance</h3>
                            <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.</p>
                            <a href="#" class="block font-medium text-yellow-500">Know more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
