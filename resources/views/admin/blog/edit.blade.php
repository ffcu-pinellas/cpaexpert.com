<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('blog.index') }}" class="p-2 text-slate-400 hover:text-indigo-600 transition-colors bg-white rounded-lg border border-gray-100 shadow-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Edit Blog Post') }}
            </h2>
        </div>
    </x-slot>

    <div class="max-w-4xl">
        <form action="{{ route('blog.update', $blog) }}" method="POST" class="space-y-6">
            @csrf
            @method('PATCH')
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <label for="title" class="block text-sm font-semibold text-slate-700 mb-1">Post Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $blog->title) }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="e.g. 10 Tips for Tax Season" required>
                        @error('title') <p class="mt-1 text-sm text-rose-600 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div class="md:col-span-1">
                        <label for="slug" class="block text-sm font-semibold text-slate-700 mb-1">URL Slug</label>
                        <input type="text" name="slug" id="slug" value="{{ old('slug', $blog->slug) }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="10-tips-for-tax-season" required>
                        @error('slug') <p class="mt-1 text-sm text-rose-600 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div class="md:col-span-1">
                        <label for="category_id" class="block text-sm font-semibold text-slate-700 mb-1">Category</label>
                        <select name="category_id" id="category_id" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" required>
                            <option value="">Select a category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id', $blog->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id') <p class="mt-1 text-sm text-rose-600 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div class="md:col-span-1">
                        <label for="author_name" class="block text-sm font-semibold text-slate-700 mb-1">Author Name</label>
                        <input type="text" name="author_name" id="author_name" value="{{ old('author_name', $blog->author_name) }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm">
                    </div>

                    <div class="md:col-span-1">
                        <label for="image_url" class="block text-sm font-semibold text-slate-700 mb-1">Featured Image URL</label>
                        <input type="text" name="image_url" id="image_url" value="{{ old('image_url', $blog->image_url) }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="https://example.com/image.jpg">
                    </div>

                    <div class="md:col-span-2">
                        <label for="content" class="block text-sm font-semibold text-slate-700 mb-2">Post Content</label>
                        <textarea name="content" id="content" rows="15" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="Write your post content here...">{{ old('content', $blog->content) }}</textarea>
                    </div>

                    <div class="md:col-span-2 pt-4 border-t border-gray-100">
                        <label class="inline-flex items-center cursor-pointer group">
                            <input type="hidden" name="is_published" value="0">
                            <input type="checkbox" name="is_published" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" {{ old('is_published', $blog->is_published) ? 'checked' : '' }}>
                            <span class="ml-3 text-sm font-semibold text-slate-700 group-hover:text-indigo-600 transition-colors">Published</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end gap-3">
                <a href="{{ route('blog.index') }}" class="px-6 py-2 text-slate-600 font-semibold hover:text-slate-800 transition-all">Cancel</a>
                <button type="submit" class="px-8 py-3 bg-indigo-600 text-white rounded-lg font-bold shadow-lg shadow-indigo-500/20 hover:bg-indigo-700 transition-all transform hover:-translate-y-0.5">
                    Update Post
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>
