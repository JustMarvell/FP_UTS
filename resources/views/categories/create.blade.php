@extends('layouts.app')

@section('title', 'Add Category')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">Add Category</h1>
    <form method="POST" action="{{ route('categories.store') }}" class="bg-white rounded shadow p-6 space-y-4">
        @csrf
        @include('categories._form')
    </form>
@endsection