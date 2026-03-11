<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CpaExpert') }} Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-outfit antialiased bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-900 h-full flex flex-col shadow-xl transition-all duration-300">
            <div class="p-6 flex items-center gap-3">
                <div class="w-10 h-10 bg-indigo-600 rounded-lg flex items-center justify-center font-bold text-white text-xl">
                    C
                </div>
                <span class="text-white font-bold text-xl tracking-tight">CpaExpert</span>
            </div>

            <nav class="flex-1 px-4 space-y-1 overflow-y-auto mt-4">
                <x-admin.nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" icon="home">
                    Dashboard
                </x-admin.nav-link>

                <div class="pt-4 pb-2 text-xs font-semibold text-slate-500 uppercase tracking-wider px-3">CMS & Content</div>
                
                <x-admin.nav-link href="{{ route('pages.index') }}" :active="request()->routeIs('pages.*')" icon="pages">
                    Pages
                </x-admin.nav-link>
                <x-admin.nav-link href="{{ route('practice-areas.index') }}" :active="request()->routeIs('practice-areas.*')" icon="practice">
                    Practice Areas
                </x-admin.nav-link>
                <x-admin.nav-link href="{{ route('team.index') }}" :active="request()->routeIs('team.*')" icon="team">
                    Team Members
                </x-admin.nav-link>
                <x-admin.nav-link href="{{ route('blog.index') }}" :active="request()->routeIs('blog.*')" icon="blog">
                    Blog Posts
                </x-admin.nav-link>

                <div class="pt-4 pb-2 text-xs font-semibold text-slate-500 uppercase tracking-wider px-3">Site Settings</div>

                <x-admin.nav-link href="{{ route('navigation.index') }}" :active="request()->routeIs('navigation.*')" icon="navigation">
                    Navigation Menus
                </x-admin.nav-link>
                <x-admin.nav-link href="#" icon="design">
                    Visual Customization
                </x-admin.nav-link>
                <x-admin.nav-link href="#" icon="media">
                    Media Library
                </x-admin.nav-link>
                <x-admin.nav-link href="{{ route('settings.index') }}" :active="request()->routeIs('settings.*')" icon="settings">
                    Global Settings
                </x-admin.nav-link>
            </nav>

            <div class="p-4 border-t border-slate-800">
                <div class="flex items-center gap-3 px-3 py-2 text-slate-300">
                    <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center text-xs font-bold text-white">
                        {{ auth()->user()->name[0] ?? 'A' }}
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium truncate">{{ auth()->user()->name }}</p>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-[10px] text-slate-500 hover:text-white transition-colors">
                                Sign Out
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="bg-white border-b border-gray-200 h-16 flex items-center justify-between px-8">
                <div>
                    @isset($header)
                        {{ $header }}
                    @endisset
                </div>
                <div class="flex items-center gap-4">
                    <button class="p-2 text-gray-400 hover:text-indigo-600 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    </button>
                    <a href="/" target="_blank" class="px-4 py-2 text-sm font-medium text-slate-600 bg-slate-100 rounded-lg hover:bg-slate-200 transition-colors flex items-center gap-2">
                        View Site
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </a>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-8">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>
