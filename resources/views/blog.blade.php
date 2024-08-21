<x-layout>


    <x-slot:heading>
        Blog
    </x-slot:heading>

    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
        <div class="max-w-[370px] mx-auto mb-10">
            <div class="rounded overflow-hidden mb-8">
                <img src="{{ asset('storage/images/' . $blog['image']) }}" alt="Blog Image"
                    class="object-cover object-center h-48" />
            </div>
            <div>
                <span
                    class="
  bg-primary
  rounded
  inline-block
  text-center
  py-1
  px-4
  text-xs
  leading-loose
  font-semibold
  text-white
  mb-5
  ">
                    {{ $blog['date'] }}
                </span>
                <h3>
                    <a href="javascript:void(0)"
                        class="
     font-semibold
     text-xl
     sm:text-2xl
     lg:text-xl
     xl:text-2xl
     mb-4
     inline-block
     text-dark
     hover:text-primary
     ">
                        {{ $blog['name'] }}
                    </a>
                </h3>
                <p class="text-base text-body-color">
                    {{ $blog['description'] }}
                </p>
            </div>
        </div>
    </div>


</x-layout>
