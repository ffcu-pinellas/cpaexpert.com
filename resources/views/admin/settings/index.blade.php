<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800 leading-tight">
            {{ __('Global Site Settings') }}
        </h2>
    </x-slot>

    <div class="max-w-5xl">
        <form action="{{ route('settings.update') }}" method="POST" class="space-y-8">
            @csrf
            
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                <h3 class="text-lg font-bold text-slate-900 mb-6 flex items-center gap-2">
                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    General Information
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <label for="site_name" class="block text-sm font-semibold text-slate-700">Site Name</label>
                        <input type="text" name="settings[site_name]" id="site_name" value="{{ $settings['site_name'] ?? 'Your CPA Expert' }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div class="space-y-2">
                        <label for="logo_url" class="block text-sm font-semibold text-slate-700">Logo (Image URL)</label>
                        <input type="text" name="settings[logo_url]" id="logo_url" value="{{ $settings['logo_url'] ?? '' }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500" placeholder="https://example.com/logo.png">
                    </div>

                    <div class="space-y-2">
                        <label for="contact_email" class="block text-sm font-semibold text-slate-700">Contact Email</label>
                        <input type="email" name="settings[contact_email]" id="contact_email" value="{{ $settings['contact_email'] ?? '' }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div class="space-y-2">
                        <label for="contact_phone" class="block text-sm font-semibold text-slate-700">Contact Phone</label>
                        <input type="text" name="settings[contact_phone]" id="contact_phone" value="{{ $settings['contact_phone'] ?? '' }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div class="md:col-span-2 space-y-2">
                        <label for="address" class="block text-sm font-semibold text-slate-700">Physical Address</label>
                        <textarea name="settings[address]" id="address" rows="3" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500">{{ $settings['address'] ?? '' }}</textarea>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                <h3 class="text-lg font-bold text-slate-900 mb-6 flex items-center gap-2">
                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                    Third-Party Integrations
                </h3>
                
                <div class="space-y-4">
                    <div class="space-y-2">
                        <label for="tawk_property_id" class="block text-sm font-semibold text-slate-700">tawk.to Property ID</label>
                        <input type="text" name="settings[tawk_property_id]" id="tawk_property_id" value="{{ $settings['tawk_property_id'] ?? '' }}" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500" placeholder="e.g. 5f..." >
                        <p class="text-[10px] text-slate-400">Leave blank to disable live chat.</p>
                    </div>

                    <div class="space-y-2">
                        <label for="google_maps_embed" class="block text-sm font-semibold text-slate-700">Google Maps Embed HTML</label>
                        <textarea name="settings[google_maps_embed]" id="google_maps_embed" rows="4" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 font-mono text-xs">{{ $settings['google_maps_embed'] ?? '' }}</textarea>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end gap-3">
                <button type="submit" class="px-8 py-3 bg-indigo-600 text-white rounded-lg font-bold shadow-lg shadow-indigo-500/20 hover:bg-indigo-700 transition-all transform hover:-translate-y-0.5">
                    Save Site Settings
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>
