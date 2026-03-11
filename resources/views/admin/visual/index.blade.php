<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800 leading-tight">
            {{ __('Visual Customization') }}
        </h2>
    </x-slot>

    <div class="max-w-5xl">
        <form action="{{ route('visual.update') }}" method="POST" class="space-y-8">
            @csrf
            
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                <h3 class="text-lg font-bold text-slate-900 mb-6 flex items-center gap-2">
                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.828 2.828a2 2 0 010 2.828l-8.486 8.486L11 7.343z"></path></svg>
                    Color Palette (Tailwind-Ready)
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        <label class="block text-sm font-semibold text-slate-700">Primary Color (Brand)</label>
                        <div class="flex items-center gap-4">
                            <input type="color" name="colors[primary]" value="{{ $colors['primary'] ?? '#1e293b' }}" class="w-12 h-12 rounded-lg border-gray-200 cursor-pointer">
                            <input type="text" value="{{ $colors['primary'] ?? '#1e293b' }}" class="flex-1 rounded-lg border-gray-200 text-sm font-mono" readonly>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <label class="block text-sm font-semibold text-slate-700">Secondary Color (Accents)</label>
                        <div class="flex items-center gap-4">
                            <input type="color" name="colors[secondary]" value="{{ $colors['secondary'] ?? '#d4af37' }}" class="w-12 h-12 rounded-lg border-gray-200 cursor-pointer">
                            <input type="text" value="{{ $colors['secondary'] ?? '#d4af37' }}" class="flex-1 rounded-lg border-gray-200 text-sm font-mono" readonly>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <label class="block text-sm font-semibold text-slate-700">Accent Color (Interactive)</label>
                        <div class="flex items-center gap-4">
                            <input type="color" name="colors[accent]" value="{{ $colors['accent'] ?? '#4f46e5' }}" class="w-12 h-12 rounded-lg border-gray-200 cursor-pointer">
                            <input type="text" value="{{ $colors['accent'] ?? '#4f46e5' }}" class="flex-1 rounded-lg border-gray-200 text-sm font-mono" readonly>
                        </div>
                    </div>

                     <div class="space-y-4">
                        <label class="block text-sm font-semibold text-slate-700">Background Surface</label>
                        <div class="flex items-center gap-4">
                            <input type="color" name="colors[surface]" value="{{ $colors['surface'] ?? '#ffffff' }}" class="w-12 h-12 rounded-lg border-gray-200 cursor-pointer">
                            <input type="text" value="{{ $colors['surface'] ?? '#ffffff' }}" class="flex-1 rounded-lg border-gray-200 text-sm font-mono" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                <h3 class="text-lg font-bold text-slate-900 mb-6 flex items-center gap-2">
                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
                    Typography (Google Fonts)
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <label for="font-heading" class="block text-sm font-semibold text-slate-700">Heading Font Family</label>
                        <select name="fonts[heading]" id="font-heading" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500">
                            <option value="Inter" {{ ($fonts['heading'] ?? '') == 'Inter' ? 'selected' : '' }}>Inter (Sans)</option>
                            <option value="Playfair Display" {{ ($fonts['heading'] ?? '') == 'Playfair Display' ? 'selected' : '' }}>Playfair Display (Serif)</option>
                            <option value="Montserrat" {{ ($fonts['heading'] ?? '') == 'Montserrat' ? 'selected' : '' }}>Montserrat (Sans)</option>
                            <option value="Lora" {{ ($fonts['heading'] ?? '') == 'Lora' ? 'selected' : '' }}>Lora (Serif)</option>
                            <option value="Roboto" {{ ($fonts['heading'] ?? '') == 'Roboto' ? 'selected' : '' }}>Roboto (Sans)</option>
                        </select>
                        <p class="text-[10px] text-slate-400">Used for H1, H2, and title elements.</p>
                    </div>

                    <div class="space-y-2">
                        <label for="font-body" class="block text-sm font-semibold text-slate-700">Body Font Family</label>
                        <select name="fonts[body]" id="font-body" class="w-full rounded-lg border-gray-200 focus:border-indigo-500 focus:ring-indigo-500">
                            <option value="Inter" {{ ($fonts['body'] ?? '') == 'Inter' ? 'selected' : '' }}>Inter (Sans)</option>
                            <option value="Open Sans" {{ ($fonts['body'] ?? '') == 'Open Sans' ? 'selected' : '' }}>Open Sans (Sans)</option>
                            <option value="Lato" {{ ($fonts['body'] ?? '') == 'Lato' ? 'selected' : '' }}>Lato (Sans)</option>
                            <option value="Merriweather" {{ ($fonts['body'] ?? '') == 'Merriweather' ? 'selected' : '' }}>Merriweather (Serif)</option>
                        </select>
                        <p class="text-[10px] text-slate-400">Used for paragraphs and general UI text.</p>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end gap-3">
                <button type="submit" class="px-8 py-3 bg-indigo-600 text-white rounded-lg font-bold shadow-lg shadow-indigo-500/20 hover:bg-indigo-700 transition-all transform hover:-translate-y-0.5">
                    Update Theme Settings
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>
