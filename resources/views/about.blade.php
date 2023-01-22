@extends('layouts.app')

@section('masthead')
@endsection

@section('livewire')
@endsection

@section('content')
    <div class="ml-auto py-24 mr-auto px-4 md:px-12 text-gray-700 pb-24 lg:pb-0 z-50">
        <div class="bg-white dark:bg-gray-800 shadow-2xl dark:text-gray-100 w-full">
            <div class="flex gap-x-2 flex-col xl:flex-row w-full">
                <div class="xl:w-5/12 w-full h-[30vh] md:h-[50vh] lg:h-[60vh] xl:h-[80vh] relative">
                    <img src="{{ asset('images/image') }}" class="object-cover w-full h-full" />
                    <div class="absolute top-0 w-full h-full bg-gray-700 opacity-[0.6]"></div>
                </div>

                <div class="xl:w-7/12 w-full p-12 flex-col flex text-left">
                    <div>
                    <div class="">
                        <h3 class="text-5xl font-bold pb-8 md:pb-0 text-center md:text-left">About Peter Conte</h3>
                    </div>
                        <h2 class="text-xl font-semibold text-yellow-500 pb-4 md:pb-0 text-center md:text-left">45 Years experience</h2>
                    </div>

                    <div class="flex flex-col mt-8 gap-y-6">
                        <p>
                            Meet Peter, a skilled and experienced domestic electrician with 45 years of experience in
                            the industry. Based in Colchester, he has a wealth of knowledge and expertise in all aspects
                            of domestic electrical work, and takes great pride in providing his clients with a high standard
                            of workmanship and customer service.
                        </p>
                        <p>
                            Outside of work, Peter has a passion for cars, with his favorite being a 1967 Ford Mustang. He
                            has always been fascinated by the mechanics and engineering behind these vehicles and enjoys
                            working on his own car projects in his spare time. He is an enthusiast of classic cars and
                            enjoys the process of restoring and maintaining them to their original condition. He also
                            likes to attend car shows and events, where he can admire and learn from other classic
                            car enthusiasts.
                        </p>

                        <p>
                            Peter is a friendly and approachable person, with a strong work ethic and a commitment to
                            delivering the best possible results for his clients. He is always happy to offer advice and
                            assistance, and is dedicated to ensuring that his clients are completely satisfied with the
                            work he carries out. He is also a good listener and is able to understand his customer's needs
                            and requirements.
                        </p>

                        <p>
                            Peter is a reliable and trustworthy professional, who takes great care to ensure that all o
                            f his work is completed to the highest standards. He is fully qualified and insured, and has
                            a proven track record of delivering excellent results, time and time again. He is also up to
                            date with the latest industry regulations, to ensure that all of his work is compliant and safe.
                        </p>
                        <p>
                            I have a wide range of certifications and qualifications to my name, as a result of my 45 years
                            of experience as an electrician. These include an NVQ Level 3 or equivalent in Electrical
                            Installation, which demonstrates my proficiency in the field. Additionally, I am
                            certified in inspection and testing, as well as the installation and maintenance of
                            electrical systems. I also hold a valid certification for working with electrical wiring in
                            hazardous areas, as well as a certification for the design, installation, commissioning, and
                            maintenance of emergency lighting systems. I also have a diploma in electrical engineering and
                            a valid certification for fire alarm systems. I am also up to date with the latest industry
                            regulations and safety standards.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
