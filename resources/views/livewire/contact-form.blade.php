@section('masthead')
@endsection

<section>
    <div class="relative flex sm:flex-row sm:justify-between">
        <div class="flex flex-wrap w-full lg:w-2/4 py-12">
            <div class="grow-0 shrink-0 basis-auto w-full lg:px-6 mb-12 xl:mb-0">
                <div class="w-full md:max-w-xl lg:max-w-3xl mx-auto text-center md:text-left">
                    <h3 class="text-5xl font-bold text-yellow-500 pb-8 md:pb-0">Contact us</h3>

                    <p class="font-semibold leading-8 text-gray-500 dark:text-gray-300 dark:text-gray-200 text-md py-8">
                        Feel free to contact us with your query, or to book a telephone consultation, 
                        we'll get back to you as soon as we can.
                    </p>
                </div>

                <form wire:submit.prevent="submit">
                    <div class="form-group mb-6">
                        <input
                            type="text"
                            wire:model="form.name"
                            class="block w-full px-3 py-1.5 font-normal dark:bg-gray-800 bg-white bg-clip-padding border border-l-4 border-solid dark:border-gray-800 border-white dark:text-gray-100 text-gray-700 dark:text-gray-100 transition ease-in-out m-0 focus:text-gray-700 focus:dark:text-gray-100 focus:dark:bg-gray-800 bg-white focus:dark:border-l-yellow-500 focus:border-l-yellow-500 focus:outline-none"
                            id="nameText"
                            placeholder="Name"
                            >
                            @error('form.name') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mb-6">
                        <input
                            type="email"
                            wire:model="form.email"
                            class="block w-full px-3 py-1.5 text-base font-normal dark:bg-gray-800 bg-white bg-clip-padding border border-l-4 border-solid dark:border-gray-800 border-white dark:text-gray-100 text-gray-700 dark:text-gray-100 transition ease-in-out m-0 focus:text-gray-700 focus:dark:text-gray-100 focus:dark:bg-gray-800 bg-white focus:dark:border-l-yellow-500 focus:border-l-yellow-500 focus:outline-none"
                            id="emailText"
                            placeholder="Email address"
                            >
                            @error('form.email') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mb-6">
                        <input
                            type="tel"
                            wire:model="form.telephone"
                            class="block w-full px-3 py-1.5 text-base font-normal dark:bg-gray-800 bg-white bg-clip-padding border border-l-4 border-solid dark:border-gray-800 border-white dark:text-gray-100 text-gray-700 dark:text-gray-100 transition ease-in-out m-0 focus:text-gray-700 focus:dark:text-gray-100 focus:dark:bg-gray-800 bg-white focus:dark:border-l-yellow-500 focus:border-l-yellow-500 focus:outline-none"
                            id="emailText"
                            placeholder="Telephone (Optional)"
                            >
                            @error('form.telephone') <span class="error">{{ $message }}</span> @enderror
                    </div>


                    <div class="form-group mb-6">
                        <input
                            type="text"
                            wire:model="form.reference"
                            class="block w-full px-3 py-1.5 text-base font-normal dark:bg-gray-800 bg-white bg-clip-padding border border-l-4 border-solid dark:border-gray-800 border-white dark:text-gray-100 text-gray-700 dark:text-gray-100 transition ease-in-out m-0 focus:text-gray-700 focus:dark:text-gray-100 focus:dark:bg-gray-800 bg-white focus:dark:border-l-yellow-500 focus:border-l-yellow-500 focus:outline-none"
                            id="referenceText"
                            placeholder="Booking Reference (Optional)"
                            >
                            @error('form.reference') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mb-6">
                        <textarea
                            type="text"
                            wire:model="form.message"
                            class="block w-full px-3 py-1.5 text-base font-normal dark:bg-gray-800 bg-white bg-clip-padding border border-l-4 border-solid dark:border-gray-800 border-white dark:text-gray-100 text-gray-700 dark:text-gray-100 transition ease-in-out m-0 focus:text-gray-700 focus:dark:text-gray-100 focus:dark:bg-gray-800 bg-white focus:dark:border-l-yellow-500  focus:border-l-yellow-500 focus:outline-none"
                            id="messageTextbox"
                            rows="3"
                            placeholder="Message"></textarea>
                        @error('form.message') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group form-check text-center mb-6">
                        <input
                            type="checkbox"
                            class="form-check-input appearance-none h-4 w-4 border border-l-1 dark:border-gray-100 border-gray-400 dark:text-gray-100 text-gray-700 dark:text-gray-100 dark:bg-gray-800 bg-white checked:bg-yellow-500 checked:dark:bg-yellow-500 checked:dark:border-yellow-500 checked:border-yellow-500 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                            id="copyCheckbox"
                            checked
                            />
                        <label
                            class="form-check-label inline-block"
                            for="copyCheckbox"
                            >
                            Send me a copy of this message
                        </label>
                    </div>

                    @if($success)
                        <div class="flex gap-x-1">
                            <span class="success mr-1 ">
                                <i class="fa-solid fa-circle-check fa-lg"></i>
                            </span>

                            <h2 class="text-lg mb-2 pb-1 success">We've received your message! We'll get back to you as soon as we can.</h2>
                        </div>
                    @endif

                    <button
                        type="submit"
                        class="w-full px-6 py-5 mt-4 bg-yellow-500 text-gray-100 font-bold text-md uppercase shadow-md hover:bg-yellow-400 hover:shadow-lg focus:bg-yellow-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-800 active:shadow-lg transition duration-150 ease-in-out"
                        >
                        Send
                        <span class="text-white ml-1">
                            <i class="fa-solid fa-paper-plane fa-sm"></i>
                        </span>
                    </button>
                </form>
            </div>
        </div>

        <div class="hidden lg:block -m-12 relative bg-yellow-500 min-h-[100%] w-3/12">
            <div class="absolute bottom-0 left-[50%] -translate-x-[50%] flex mb-6 w-full px-[25%] justify-between">
                <a href="#!" type="button" class="leading-normal uppercase w-9 h-9 m-1">
                    <span class="text-gray-700">
                        <i class="fa-brands fa-facebook-f fa-lg"></i>
                    </span>
                </a>

                <a href="#!" type="button" class="leading-[1.7rem] uppercase w-9 h-9 m-1">
                    <span class="text-gray-700">
                        <i class="fa-brands fa-instagram fa-lg"></i>
                    </span>
                </a>

                <a href="https://github.com/jurdunnn/pconte-com" target="_blank" type="button" class="leading-normal uppercase w-9 h-9 m-1">
                    <span class="text-gray-700">
                        <i class="fa-brands fa-github fa-lg"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
