
<x-layout>
    <x-slot:heading>
        Blogs by Author: {{ $author->name }}
    </x-slot:heading>

    <div class="container mx-auto p-4">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($author->blogs as $blog)
                <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                    <div class="md:flex md:flex-col">
                        <a href="{{ route('blogs.show', $blog->id) }}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">
                            <div class="md:flex-shrink-0">
                                <img class="h-60 w-full object-cover" src="{{ asset('storage/images/' . $blog->image) }}" alt="{{ $blog->title }}">
                            </div>
                        </a>
                        <div class="p-6">
                            <span class="bg-gray-400 rounded inline-block text-center py-0.5 px-2 text-xs leading-loose font-semibold text-white mt-0 mb-2">
                                {{ $blog->created_at }}
                            </span>
                            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Category :
                                {{ $blog->category ? $blog->category->name : 'Uncategorized' }}
                            </div>
                            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Author : 
                                {{ $blog->author ? $blog->author->name : 'Unknown Author' }}
                            </div>
                            <a href="{{ route('blogs.show', $blog->id) }}" class="block mt-1 text-xl leading-tight font-medium text-black hover:underline">
                                {{ $blog->title }}
                            </a>
                            <p class="mt-2 text-gray-500">{{ $blog->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
