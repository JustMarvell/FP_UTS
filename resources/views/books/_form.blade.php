<div>
    <label class="block mb-1 font-medium">Category</label>
    <select name="category_id" class="w-full border rounded px-3 py-2 @error('category_id') border-red-500 @enderror">
        <option value="">-- Select category --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @selected(old('category_id', $book->category_id ?? '') == $category->id)>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
    @enderror
</div>

@foreach ([
        'title' => ['Title', 'text'],
        'author' => ['Author', 'text'],
        'published_year' => ['Published Year', 'number'],
        'stock' => ['Stock', 'number'],
    ] as $field => [$label, $type])
        <div>
            <label class="block mb-1 font-medium">{{ $label }}</label>
            <input type="{{ $type }}" name="{{ $field }}" value="{{ old($field, $book->$field ?? '') }}"
                   class="w-full border rounded px-3 py-2 @error($field) border-red-500 @enderror">
            @error($field)
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>
@endforeach

<div class="flex gap-2">
    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Save</button>
    <a href="{{ route('books.index') }}" class="px-4 py-2 rounded border hover:bg-gray-50">Cancel</a>
</div>