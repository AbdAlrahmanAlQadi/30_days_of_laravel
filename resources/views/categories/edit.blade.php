
<x-layout>
    <x-slot:heading>
        Edit Category: {{ $category->name }}
    </x-slot:heading>

    <div class="container mx-auto p-4">
        <form action="{{ route('categories.update', $category->id) }}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
                <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded" value="{{ old('name', $category->name) }}" required>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update Category</button>
            </div>
        </form>
    </div>
</x-layout>
