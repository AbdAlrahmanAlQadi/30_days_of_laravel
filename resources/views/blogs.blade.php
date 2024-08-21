<x-layout>

    <x-slot:heading>
        Blogs
    </x-slot:heading>


    <!-- ====== Blog Section Start -->
    <section class="pt-20 lg:pt-[60px] pb-10 lg:pb-20">
        <div class="container">
            <div class="flex flex-wrap justify-center -mx-4">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
                        <span class="font-semibold text-lg text-primary mb-2 block">
                            Our Blogs
                        </span>
                        <h2
                            class="
                   font-bold
                   text-3xl
                   sm:text-4xl
                   md:text-[40px]
                   text-dark
                   mb-4
                   ">
                   Tech Insights: A Collection of Web Development Articles
                        </h2>
                        <p class="text-base text-body-color">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-4">
                @foreach ($blogs as $blog)
                    <a href="/blogs/{{ $blog['id'] }}" class="text-blue-500 hover:underline">
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
                                        <a href="/blogs/{{ $blog['id'] }}"
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
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ====== Blog Section End -->

</x-layout>
