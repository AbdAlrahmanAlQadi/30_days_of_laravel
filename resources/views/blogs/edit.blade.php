
<x-layout>
    <x-slot:heading>
        Edit Blog: {{ $blog->title }}
    </x-slot:heading>

    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $blog->title) }}" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
            <textarea name="description" id="description" class="w-full p-2 border border-gray-300 rounded" required>{{ old('description', $blog->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-bold mb-2">Image</label>
            <input type="file" name="image" id="image" class="w-full p-2 border border-gray-300 rounded">
            <small>Current Image: {{ $blog->image }}</small>
        </div>

        <div class="mb-4">
            <label for="category_id" class="block text-gray-700 font-bold mb-2">Category</label>
            <select name="category_id" id="category_id" class="w-full p-2 border border-gray-300 rounded" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $blog->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="author_id" class="block text-gray-700 font-bold mb-2">Author</label>
            <select name="author_id" id="author_id" class="w-full p-2 border border-gray-300 rounded" required>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}" {{ $blog->author_id == $author->id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Update Blog</button>
        </div>
    </form>
</x-layout>
