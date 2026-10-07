@extends('layouts.app')

@section('title', 'Books')

@section('content')
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-2xl font-semibold">Books</h1>
        <a href="{{ route('books.create') }}" class="bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700">Add Book</a>
    </div>

    <div class="bg-white rounded shadow overflow-x-auto">
        <table class="min-w-full text-left">
            <thead class="bg-gray-50 text-sm uppercase text-gray-600">
                <tr>
                    <th class="px-4 py-3">Title</th>
                    <th class="px-4 py-3">Author</th>
                    <th class="px-4 py-3">Category</th>
                    <th class="px-4 py-3">Year</th>
                    <th class="px-4 py-3">Stock</th>
                    <th class="px-4 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)
                    <tr class="border-t">
                        <td class="px-4 py-3">{{ $book->title }}</td>
                        <td class="px-4 py-3">{{ $book->author }}</td>
                        <td class="px-4 py-3">{{ $book->category->name }}</td>
                        <td class="px-4 py-3">{{ $book->published_year }}</td>
                        <td class="px-4 py-3">{{ $book->stock }}</td>
                        <td class="px-4 py-3">
                            <div class="flex gap-3">
                                <a href="{{ route('books.edit', $book) }}" class="text-teal-600 hover:underline">Edit</a>
                                <form method="POST" action="{{ route('books.destroy', $book) }}" onsubmit="return confirm('Delete this book?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="px-4 py-6 text-center text-gray-500">No books yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection