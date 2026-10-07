@extends('layouts.app')

@section('title', 'Edit Book')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">Edit Book</h1>
    <form method="POST" action="{{ route('books.update', $book) }}" class="bg-white rounded shadow p-6 space-y-4">
        @csrf
        @method('PUT')
        @include('books._form')
    </form>
@endsection