
<x-layout>
    <x-slot:heading>Edit Author</x-slot:heading>

    <div class="container mx-auto p-4">
        <form action="{{ route('authors.update', $author->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ $author->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ $author->email }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="bio">Bio</label>
                <textarea name="bio" id="bio" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $author->bio }}</textarea>
            </div>

            <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700">Update Author</button>
        </form>
    </div>
</x-layout>
