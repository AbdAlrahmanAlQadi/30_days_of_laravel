<!-- resources/views/blogs/index.blade.php -->

<x-layout>
    <x-slot:heading>
        Our Blogs
    </x-slot:heading>

    <div class="container mx-auto p-4">

        <div class="container">
            <div class="flex flex-wrap justify-center -mx-4">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-[30px] lg:mb-20 max-w-[510px]">
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

            <a href="{{ route('blogs.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add
                New
                Blog</a>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($blogs as $blog)
                    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                        <div class="md:flex md:flex-col">
                            <a href="{{ route('blogs.show', $blog->slug) }}"
                                class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">
                                <div class="md:flex-shrink-0">
                                    <img class="h-60 w-full object-cover"
                                        src="{{ asset('storage/images/' . $blog->image) }}" alt="{{ $blog->title }}">
                                </div>
                            </a>
                            <div class="p-6">
                                <span
                                    class="
                        bg-gray-400
                        rounded
                        inline-block
                        text-center
                        py-0.5
                        px-2
                        text-xs
                        leading-loose
                        font-semibold
                        text-white
                        mt-0
                        mb-2

                        ">
                                    {{ $blog['created_at'] }}
                                </span>
                                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Category :
                                    {{ $blog->category ? $blog->category->name : 'Uncategorized' }}
                                </div>
                                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold"> Author :
                                    {{ $blog->author ? $blog->author->name : 'Uncategorized' }}
                                </div>
                                <a href="{{ route('blogs.show', $blog->id) }}"
                                    class="block mt-1 text-xl leading-tight font-medium text-black hover:underline">
                                    {{ $blog->title }}
                                </a>
                                <p class="mt-2 text-gray-500">{{ $blog->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                {{ $blogs->links() }}
            </div>
        </div>
</x-layout>
