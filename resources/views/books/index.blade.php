@extends('layouts.app')

@section('title', 'Books')

@section('content')
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-2xl font-semibold">Books</h1>
        <a href="{{ route('books.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Add Book</a>
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
                    </tr>
                @empty
                    <tr><td colspan="5" class="px-4 py-6 text-center text-gray-500">No books yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection