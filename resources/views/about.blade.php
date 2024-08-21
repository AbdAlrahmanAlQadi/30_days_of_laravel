<x-layout>

    <x-slot:heading>
        About Us
    </x-slot:heading>

    <section class="bg-white dark:bg-gray-800">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">{{ $about }}</h2>
                <p class="mb-4 text-gray-300">
                    {{ $bio }}
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="storage/images/{{ $img1 }}" alt="About Image 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="storage/images/{{ $img2 }}"
                    alt="About Image 2">
            </div>
        </div>
    </section>

</x-layout>
