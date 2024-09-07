
<x-layout>
    <x-slot:heading>
        Categories
    </x-slot:heading>

    <div class="container mx-auto p-4">

        <a href="{{ route('categories.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block hover:bg-blue-700 hover:text-gray-100 transition duration-300">Add New Category</a>

        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="border px-4 py-2">{{ $category->id }}</td>
                            <td class="border px-4 py-2">{{ $category->name }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('categories.show', $category->slug) }}"
                                    class="bg-gray-500 text-white px-2 py-1 rounded hover:bg-gray-600 transition duration-300">Show</a>
                                <a href="{{ route('categories.edit', $category->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded
                                    hover:bg-yellow-600 hover:text-gray-100 transition duration-300">Edit</a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600 hover:text-gray-100 transition duration-300"
                                    onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('form').forEach(function (form) {
                form.addEventListener('submit', function (e) {
                    if (!confirm('Are you sure you want to delete this category?')) {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
</x-layout>
