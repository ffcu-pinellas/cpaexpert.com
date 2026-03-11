<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('testimonials.index') }}" class="p-2 text-slate-400 hover:text-indigo-600 transition-colors bg-white rounded-lg border border-gray-100 shadow-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Add Testimonial') }}
            </h2>
        </div>
    </x-slot>

    <div class="max-w-4xl">
        <form action="{{ route('testimonials.store') }}" method="POST" class="space-y-6">
            @csrf
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label for="client_name" class="block text-sm font-semibold text-slate-700 mb-1">Client Name</label>
                        <input type="text" name="client_name" id="client_name" value="{{ old('client_name') }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="e.g. Robert Smith" required>
                        @error('client_name') <p class="mt-1 text-sm text-rose-600 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="rating" class="block text-sm font-semibold text-slate-700 mb-1">Rating (1-5)</label>
                        <select name="rating" id="rating" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" required>
                            @for($i = 5; $i >= 1; $i--)
                                <option value="{{ $i }}" {{ old('rating', 5) == $i ? 'selected' : '' }}>{{ $i }} Stars</option>
                            @endfor
                        </select>
                        @error('rating') <p class="mt-1 text-sm text-rose-600 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="content" class="block text-sm font-semibold text-slate-700 mb-2">Testimonial Content</label>
                        <textarea name="content" id="content" rows="6" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="What the client said..." required>{{ old('content') }}</textarea>
                        @error('content') <p class="mt-1 text-sm text-rose-600 font-medium">{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end gap-3">
                <a href="{{ route('testimonials.index') }}" class="px-6 py-2 text-slate-600 font-semibold hover:text-slate-800 transition-all">Cancel</a>
                <button type="submit" class="px-8 py-3 bg-indigo-600 text-white rounded-lg font-bold shadow-lg shadow-indigo-500/20 hover:bg-indigo-700 transition-all transform hover:-translate-y-0.5">
                    Save Testimonial
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>
