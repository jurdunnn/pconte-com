@section('masthead')
@endsection

@section('livewire')
@endsection

<div class="container-mobile flex flex-col items-center">
    <div class="py-4 ml-auto mr-auto w-1/3 mt-12">
        <input
            type="search"
            wire:model="searchQuery"
            class="block w-full px-3 py-1.5 font-normal dark:bg-gray-800 bg-white bg-clip-padding border border-b-4 border-solid dark:border-gray-800 border-white dark:text-gray-100 text-gray-700 dark:text-gray-100 transition ease-in-out m-0 focus:text-gray-700 focus:dark:text-gray-100 focus:dark:bg-gray-800 bg-white focus:dark:border-b-yellow-500 focus:border-b-yellow-500 focus:outline-none"
            id="searchQuery"
            placeholder="Search"
            />
    </div>
    <div class="flex flex-col gap-y-4 md:flex-row gap-x-6 select-none">
        <button wire:click="setSelectedType('1')" class="relative bg-gray-800 cursor-pointer hover:scale-105 shadow-2xl dark:text-gray-100 py-3 px-8 min-w-content">
            @if ($selectedType == 1)
                <div class="absolute top-0 right-0 w-4 h-4 bg-yellow-500"></div>
                <div class="absolute top-[6px] right-[2px] w-6 h-4 bg-gray-800 rotate-45"></div>
            @endif

            <p class="text-xl text-yellow-500 text-center font-bold">Emergency</p>
        </button>

        <a wire:click="setSelectedType('3')" class="relative bg-gray-800 hover:scale-105 cursor-pointer shadow-2xl dark:text-gray-100 py-3 px-8 min-w-content">
            @if ($selectedType == 3)
                <div class="absolute top-0 right-0 w-4 h-4 bg-red-500"></div>
                <div class="absolute top-[6px] right-[2px] w-6 h-4 bg-gray-800 rotate-45"></div>
            @endif
            <div class="text-xl text-red-500 text-center font-bold">Maintenance</div>
        </a>

        <a wire:click="setSelectedType('2')" class="relative bg-gray-800 hover:scale-105 cursor-pointer shadow-2xl dark:text-gray-100 py-3 px-8 min-w-content">
            @if ($selectedType == 2)
                <div class="absolute top-0 right-0 w-4 h-4 bg-blue-500"></div>
                <div class="absolute top-[6px] right-[2px] w-6 h-4 bg-gray-800 rotate-45"></div>
            @endif
            <div class="text-xl text-blue-500 text-center font-bold">Installation</div>
        </a>

        <a wire:click="setSelectedType(null)" class="relative bg-gray-800 hover:scale-105 cursor-pointer shadow-2xl dark:text-gray-100 py-3 px-8 min-w-content">
            @if ($selectedType == null)
                <div class="absolute top-0 right-0 w-4 h-4 bg-white"></div>
                <div class="absolute top-[6px] right-[2px] w-6 h-4 bg-gray-800 rotate-45"></div>
            @endif
            <div class="text-xl text-white text-center font-bold">All</div>
        </a>

    </div>

    <div class="p-4 text-gray-600 dark:text-gray-200 py-12 select-none">
        <ul class="grid place-content-center grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($services as $service)
                <li class="text-gray-700 z-50">
                    <div class="relative bg-white dark:bg-gray-800 shadow-2xl dark:text-gray-100 h-56 py-8 px-8">
                        @if ($service->type === 1)
                        <div class="absolute top-0 right-0 w-4 h-4 bg-yellow-500"></div>
                        @elseif ($service->type === 2)
                            <div class="absolute top-0 right-0 w-4 h-4 bg-blue-500"></div>
                        @elseif ($service->type === 3) 
                            <div class="absolute top-0 right-0 w-4 h-4 bg-red-500"></div>
                        @endif

                        <div class="absolute top-[6px] right-[2px] w-6 h-4 bg-gray-800 rotate-45"></div>
                        <div class="text-xl text-yellow-500 font-bold">{{ $service->title }}</div>
                        <p class="max-w-sm py-6 text-sm">{{ $service->description }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
