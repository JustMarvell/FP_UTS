<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Mini-Perpus')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen">
    <nav class="bg-indigo-700 text-white">
        <div class="max-w-5xl mx-auto px-4 py-3 flex items-center justify-between">
            <span class="font-bold text-lg">Mini-Perpus</span>
            <div class="flex gap-4">
                <a href="{{ route('books.index') }}" class="hover:underline">Books</a>
                <a href="{{ route('categories.index') }}" class="hover:underline">Categories</a>
            </div>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-4 py-6">
        @if (session('success'))
            <div class="mb-4 rounded bg-green-100 text-green-800 px-4 py-3">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="mb-4 rounded bg-red-100 text-red-800 px-4 py-3">{{ session('error') }}</div>
        @endif

        @yield('content')
    </main>
</body>
</html>