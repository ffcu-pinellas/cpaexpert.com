<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('team.index') }}" class="p-2 text-slate-400 hover:text-indigo-600 transition-colors bg-white rounded-lg border border-gray-100 shadow-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Edit Team Member') }}: <span class="text-indigo-600">{{ $team->name }}</span>
            </h2>
        </div>
    </x-slot>

    <div class="max-w-4xl">
        <form action="{{ route('team.update', $team) }}" method="POST" class="space-y-6">
            @csrf
            @method('PATCH')
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2 text-center pb-6 border-b border-gray-50 mb-4">
                        <div class="inline-block p-1 rounded-full border-2 border-indigo-500 bg-indigo-50">
                             <div class="w-24 h-24 rounded-full bg-slate-100 flex items-center justify-center overflow-hidden transition-all overflow-hidden border-2 border-white">
                                @if($team->image_url)
                                    <img src="{{ $team->image_url }}" alt="{{ $team->name }}" class="w-full h-full object-cover">
                                @else
                                    <svg class="w-12 h-12 text-slate-300" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                                @endif
                             </div>
                        </div>
                        <input type="text" name="image_url" placeholder="Or enter image URL" class="mt-3 w-full text-xs text-center border-none bg-transparent focus:ring-0 text-slate-400" value="{{ old('image_url', $team->image_url) }}">
                    </div>

                    <div class="md:col-span-1">
                        <label for="name" class="block text-sm font-semibold text-slate-700 mb-1">Full Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $team->name) }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="e.g. John Doe" required>
                        @error('name') <p class="mt-1 text-sm text-rose-600 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div class="md:col-span-1">
                        <label for="role" class="block text-sm font-semibold text-slate-700 mb-1">Role/Position</label>
                        <input type="text" name="role" id="role" value="{{ old('role', $team->role) }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="e.g. Senior Attorney" required>
                        @error('role') <p class="mt-1 text-sm text-rose-600 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div class="md:col-span-1">
                        <label for="email" class="block text-sm font-semibold text-slate-700 mb-1">Email Address</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $team->email) }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="john@yourcpaexpert.com">
                    </div>

                    <div class="md:col-span-1">
                        <label for="phone" class="block text-sm font-semibold text-slate-700 mb-1">Phone Number</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone', $team->phone) }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="+1 (555) 000-0000">
                    </div>

                    <div class="md:col-span-2">
                        <label for="linkedin_url" class="block text-sm font-semibold text-slate-700 mb-1">LinkedIn Profile</label>
                        <input type="url" name="linkedin_url" id="linkedin_url" value="{{ old('linkedin_url', $team->linkedin_url) }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="https://linkedin.com/in/username">
                    </div>

                    <div class="md:col-span-2">
                        <label for="bio" class="block text-sm font-semibold text-slate-700 mb-2">Biography</label>
                        <textarea name="bio" id="bio" rows="6" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 transition-all shadow-sm" placeholder="A brief professional biography...">{{ old('bio', $member->bio ?? '') }}{{ $team->bio }}</textarea>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end gap-3">
                <a href="{{ route('team.index') }}" class="px-6 py-2 text-slate-600 font-semibold hover:text-slate-800 transition-all">Cancel</a>
                <button type="submit" class="px-8 py-3 bg-indigo-600 text-white rounded-lg font-bold shadow-lg shadow-indigo-500/20 hover:bg-indigo-700 transition-all transform hover:-translate-y-0.5">
                    Update Member
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>
