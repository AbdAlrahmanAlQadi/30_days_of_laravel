
<x-layout>
    <x-slot:heading>
        Add New Category
    </x-slot:heading>

    <div class="container mx-auto p-4">
        <form action="{{ route('categories.store') }}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Category Name</label>
                <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('name') }}" required>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Category</button>
            </div>
        </form>
    </div>
</x-layout>
