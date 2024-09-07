<x-layout>
    <x-slot:heading>
        Authors
    </x-slot:heading>

    <div class="container mx-auto p-4">
        <a href="{{ route('authors.create') }}"
        class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block hover:bg-blue-700 hover:text-gray-100 transition duration-300">Add New Author</a>

        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Bio</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $author)
                        <tr>
                            <td class="border px-4 py-2">{{ $author->id }}</td>
                            <td class="border px-4 py-2">{{ $author->name }}</td>
                            <td class="border px-4 py-2">{{ $author->email }}</td>
                            <td class="border px-4 py-2">{{ $author->bio }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('authors.show', $author->id) }}"
                                    class="bg-gray-500 text-white px-2 py-1 rounded hover:bg-gray-600 transition duration-300">Show</a>
                                <a href="{{ route('authors.edit', $author->id) }}"
                                    class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</a>
                                <form action="{{ route('authors.destroy', $author->id) }}" method="POST"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600"
                                        onclick="return confirm('Are you sure you want to delete this author?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
