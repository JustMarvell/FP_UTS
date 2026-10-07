@extends('layouts.app')

@section('title', 'Add Book')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">Add Book</h1>
    <form method="POST" action="{{ route('books.store') }}" class="bg-white rounded shadow p-6 space-y-4">
        @csrf
        @include('books._form')
    </form>
@endsection