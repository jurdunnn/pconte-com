@section('masthead')
@endsection

@section('livewire-content')

    <section class="mb-20">
        <div class="text-center md:max-w-xl lg:max-w-3xl mx-auto">
            <h3 class="text-3xl font-bold mb-6 pb-2 md:mb-12 md:pb-0">Testimonials</h3>
        </div>

        <div class="grid lg:grid-cols-3 gap-6 lg:gap-12 text-center">
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
                        <x-heroicon-o-chat-bubble-left-ellipsis class="h-6 pr-2 inline-block" />
                        {{ $testimonial->testimonial }}
                    </p>
                </div>
            @endforeach
        </div>
    </section>
@endsection
