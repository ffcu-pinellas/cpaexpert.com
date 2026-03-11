<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('team.index') }}" class="p-2 text-slate-400 hover:text-indigo-600 transition-colors bg-white rounded-lg border border-gray-100 shadow-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Add Team Member') }}
            </h2>
        </div>
    </x-slot>

    <div class="max-w-4xl">
        <form action="{{ route('team.store') }}" method="POST" class="space-y-6">
            @csrf
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2 text-center pb-6 border-b border-gray-50 mb-4">
                        <div class="inline-block p-1 rounded-full border-2 border-dashed border-slate-200">
                             <div class="w-24 h-24 rounded-full bg-slate-50 flex flex-col items-center justify-center text-slate-400 gap-1 cursor-pointer hover:bg-slate-100 transition-colors">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <span class="text-[10px] font-bold uppercase tracking-tight">Upload</span>
                             </div>
                        </div>
                        <input type="text" name="image_url" placeholder="Or enter image URL" class="mt-3 w-full text-xs text-center border-none bg-transparent focus:ring-0 text-slate-400" value="{{ old('image_url') }}">
                    </div>

                    <div class="md:col-span-1">
                        <label for="name" class="block text-sm font-semibold text-slate-700 mb-1">Full Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="e.g. John Doe" required>
                        @error('name') <p class="mt-1 text-sm text-rose-600 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div class="md:col-span-1">
                        <label for="role" class="block text-sm font-semibold text-slate-700 mb-1">Role/Position</label>
                        <input type="text" name="role" id="role" value="{{ old('role') }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="e.g. Senior Attorney" required>
                        @error('role') <p class="mt-1 text-sm text-rose-600 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div class="md:col-span-1">
                        <label for="email" class="block text-sm font-semibold text-slate-700 mb-1">Email Address</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="john@yourcpaexpert.com">
                    </div>

                    <div class="md:col-span-1">
                        <label for="phone" class="block text-sm font-semibold text-slate-700 mb-1">Phone Number</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="+1 (555) 000-0000">
                    </div>

                    <div class="md:col-span-2">
                        <label for="linkedin_url" class="block text-sm font-semibold text-slate-700 mb-1">LinkedIn Profile</label>
                        <input type="url" name="linkedin_url" id="linkedin_url" value="{{ old('linkedin_url') }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="https://linkedin.com/in/username">
                    </div>

                    <div class="md:col-span-2">
                        <label for="bio" class="block text-sm font-semibold text-slate-700 mb-2">Biography</label>
                        <textarea name="bio" id="bio" rows="6" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="A brief professional biography...">{{ old('bio') }}</textarea>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end gap-3">
                <a href="{{ route('team.index') }}" class="px-6 py-2 text-slate-600 font-semibold hover:text-slate-800 transition-all">Cancel</a>
                <button type="submit" class="px-8 py-3 bg-indigo-600 text-white rounded-lg font-bold shadow-lg shadow-indigo-500/20 hover:bg-indigo-700 transition-all transform hover:-translate-y-0.5">
                    Save Member
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>
