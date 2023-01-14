@section('livewire-content')
    <section class="mb-20 text-gray-700">
        <div class="text-center md:max-w-xl lg:max-w-3xl mx-auto">
            <h3 class="text-3xl font-bold mb-6 pb-2 md:mb-12 md:pb-0 text-gray-800">Testimonials</h3>
        </div>

        <div class="grid md:grid-cols-3 gap-6 lg:gap-12 text-center">
            @foreach($testimonials as $testimonial)
                <div class="mb-12 md:mb-0">
                    <div class="flex justify-center mb-6">
                        <!-- Load colors by declaring them in a hidden and empty div -->
                        <div class="invisible bg-purple-400 bg-indigo-400 bg-red-400 bg-yellow-400 bg-green-400 bg-blue-400"></div>

                        <div class="w-32 h-32 rounded-full shadow-lg bg-{{ $testimonial->label_color }}-400 flex justify-center items-center">
                            <p class="text-white text-7xl font-bold">{{ $testimonial->label_letter }}</p>
                        </div>
                    </div>
                    <h5 class="text-xl font-semibold mb-4">{{ $testimonial->name }}</h5>
                    <h6 class="font-semibold text-yellow-600 mb-4">{{ $testimonial->location }}</h6>
                    <p class="mb-4">
                        <svg
                            aria-hidden="true"
                            focusable="false"
                            data-prefix="fas"
                            data-icon="quote-left"

                            class="w-6 pr-2 inline-block"
                            role="img"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                            >
                            <path
                                fill="currentColor"
                                d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"
                                ></path>
                        </svg>
                        {{ $testimonial->testimonial }}
                    </p>
                </div>
            @endforeach
        </div>
    </section>
@endsection
