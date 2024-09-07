<!-- resources/views/blogs/show.blade.php -->

<x-layout>
    <x-slot:heading>
        {{ $blog['title'] }}
    </x-slot:heading>

    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">

            <div class="rounded overflow-hidden mb-8">
                <img src="{{ asset('storage/images/' . $blog['image']) }}" alt="Blog Image"
                    class="h-60 w-full object-cover" />
            </div>
            <div class="md:flex md:flex-col p-5 pt-0">
                <div class="">
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
                            {{ $blog['title'] }}
                        </a>
                    </h3>
                    <p class="text-base text-body-color">
                        {{ $blog['description'] }}
                    </p>
                </div>
                <div class="mt-4">
                    <a href="{{ route('blogs.edit', $blog['id']) }}"
                        class="inline-block px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">
                        Edit
                    </a>

                    <form action="{{ route('blogs.destroy', $blog['id']) }}" method="POST" class="inline-block ml-4"
                        id="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="inline-block px-4 py-2 bg-red-500 text-white font-semibold rounded hover:bg-red-600">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('#delete-form').addEventListener('submit', function(e) {
                if (!confirm('Are you sure you want to delete this blog?')) {
                    e.preventDefault();
                }
            });
        });
    </script>
</x-layout>
