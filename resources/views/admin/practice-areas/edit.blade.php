<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('practice-areas.index') }}" class="p-2 text-slate-400 hover:text-indigo-600 transition-colors bg-white rounded-lg border border-gray-100 shadow-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Edit Practice Area') }}: <span class="text-indigo-600">{{ $practice_area->title }}</span>
            </h2>
        </div>
    </x-slot>

    <div class="max-w-4xl">
        <form action="{{ route('practice-areas.update', $practice_area) }}" method="POST" class="space-y-6">
            @csrf
            @method('PATCH')
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label for="title" class="block text-sm font-semibold text-slate-700 mb-1">Area Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $practice_area->title) }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="e.g. Criminal Defense" required>
                        @error('title') <p class="mt-1 text-sm text-rose-600 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="slug" class="block text-sm font-semibold text-slate-700 mb-1">URL Slug</label>
                        <div class="flex items-center">
                            <span class="inline-flex items-center px-3 py-2 rounded-l-lg border border-r-0 border-gray-200 bg-gray-50 text-slate-500 text-sm">
                                yourcpaexpert.com/services/
                            </span>
                            <input type="text" name="slug" id="slug" value="{{ old('slug', $practice_area->slug) }}" class="w-full rounded-r-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="criminal-defense" required>
                        </div>
                        @error('slug') <p class="mt-1 text-sm text-rose-600 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="icon" class="block text-sm font-semibold text-slate-700 mb-1">Icon (Lucide SVG Output)</label>
                        <textarea name="icon" id="icon" rows="3" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm font-mono text-xs" placeholder='<svg class="w-6 h-6" ...'>{{ old('icon', $practice_area->icon) }}</textarea>
                        <p class="mt-1 text-[10px] text-slate-400">Paste an SVG code snippet for the service icon.</p>
                    </div>

                    <div>
                        <label for="short_description" class="block text-sm font-semibold text-slate-700 mb-1">Short Description</label>
                        <textarea name="short_description" id="short_description" rows="3" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="A 2-3 sentence overview for the listing page">{{ old('short_description', $practice_area->short_description) }}</textarea>
                    </div>

                    <div>
                        <label for="content" class="block text-sm font-semibold text-slate-700 mb-2">Detailed Content</label>
                        <textarea name="content" id="content" rows="10" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="Explain this service in detail...">{{ old('content', $practice_area->content) }}</textarea>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end gap-3">
                <a href="{{ route('practice-areas.index') }}" class="px-6 py-2 text-slate-600 font-semibold hover:text-slate-800 transition-all">Cancel</a>
                <button type="submit" class="px-8 py-3 bg-indigo-600 text-white rounded-lg font-bold shadow-lg shadow-indigo-500/20 hover:bg-indigo-700 transition-all transform hover:-translate-y-0.5">
                    Update Area
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>
