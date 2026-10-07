@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">Edit Category</h1>
    <form method="POST" action="{{ route('categories.update', $category) }}" class="bg-white rounded shadow p-6 space-y-4">
        @csrf
        @method('PUT')
        @include('categories._form')
    </form>
@endsection