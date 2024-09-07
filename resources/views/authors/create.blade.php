
<x-layout>
    <x-slot:heading>
        Add New Author
    </x-slot:heading>

    <div class="container mx-auto p-4">
        <form action="{{ route('authors.store') }}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="bio">Bio</label>
                <textarea name="bio" id="bio" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block hover:bg-blue-700 hover:text-gray-100 transition duration-300">Add Author</button>
        </form>
    </div>
</x-layout>
