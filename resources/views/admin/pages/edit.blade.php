<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('pages.index') }}" class="p-2 text-slate-400 hover:text-indigo-600 transition-colors bg-white rounded-lg border border-gray-100 shadow-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Edit Page') }}: <span class="text-indigo-600">{{ $page->title }}</span>
            </h2>
        </div>
    </x-slot>

    <div class="max-w-4xl">
        <form action="{{ route('pages.update', $page) }}" method="POST" class="space-y-6">
            @csrf
            @method('PATCH')
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label for="title" class="block text-sm font-semibold text-slate-700 mb-1">Page Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $page->title) }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="e.g. About Us" required>
                        @error('title') <p class="mt-1 text-sm text-rose-600 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="slug" class="block text-sm font-semibold text-slate-700 mb-1">URL Slug</label>
                        <div class="flex items-center">
                            <span class="inline-flex items-center px-3 py-2 rounded-l-lg border border-r-0 border-gray-200 bg-gray-50 text-slate-500 text-sm">
                                yourcpaexpert.com/
                            </span>
                            <input type="text" name="slug" id="slug" value="{{ old('slug', $page->slug) }}" class="w-full rounded-r-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="about-us" required>
                        </div>
                        @error('slug') <p class="mt-1 text-sm text-rose-600 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="meta_description" class="block text-sm font-semibold text-slate-700 mb-1">Meta Description (SEO)</label>
                        <textarea name="meta_description" id="meta_description" rows="2" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="A brief summary for search engines">{{ old('meta_description', $page->meta_description) }}</textarea>
                    </div>

                    <div>
                        <label for="content" class="block text-sm font-semibold text-slate-700 mb-2">Page Content</label>
                        <textarea name="content" id="content" rows="12" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm font-mono text-sm" placeholder="Write your content here...">{{ old('content', $page->content) }}</textarea>
                    </div>

                    <div class="pt-4 border-t border-gray-100">
                        <label class="inline-flex items-center cursor-pointer group">
                            <input type="hidden" name="is_published" value="0">
                            <input type="checkbox" name="is_published" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" {{ old('is_published', $page->is_published) ? 'checked' : '' }}>
                            <span class="ml-3 text-sm font-semibold text-slate-700 group-hover:text-indigo-600 transition-colors">Published</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end gap-3">
                <a href="{{ route('pages.index') }}" class="px-6 py-2 text-slate-600 font-semibold hover:text-slate-800 transition-all">Cancel</a>
                <button type="submit" class="px-8 py-3 bg-indigo-600 text-white rounded-lg font-bold shadow-lg shadow-indigo-500/20 hover:bg-indigo-700 transition-all transform hover:-translate-y-0.5">
                    Update Page
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>
