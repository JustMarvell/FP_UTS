<div>
    <label class="block mb-1 font-medium">Name</label>
    <input type="text" name="name" value="{{ old('name', $category->name ?? '') }}"
           class="w-full border rounded px-3 py-2 @error('name') border-red-500 @enderror">
    @error('name')
        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
    @enderror
</div>

<div>
    <label class="block mb-1 font-medium">Description</label>
    <textarea name="description" rows="3"
              class="w-full border rounded px-3 py-2 @error('description') border-red-500 @enderror">{{ old('description', $category->description ?? '') }}</textarea>
    @error('description')
        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="flex gap-2">
    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Save</button>
    <a href="{{ route('categories.index') }}" class="px-4 py-2 rounded border hover:bg-gray-50">Cancel</a>
</div>