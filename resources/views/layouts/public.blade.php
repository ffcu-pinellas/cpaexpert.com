<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', $settings['site_name'] ?? config('app.name'))</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family={{ str_replace(' ', '+', $fonts['heading'] ?? 'Playfair Display') }}:wght@400;700&family={{ str_replace(' ', '+', $fonts['body'] ?? 'Inter') }}:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Dynamic Theming -->
    <style>
        :root {
            --primary-color: {{ $colors['primary'] ?? '#1e293b' }};
            --secondary-color: {{ $colors['secondary'] ?? '#d4af37' }};
            --accent-color: {{ $colors['accent'] ?? '#4f46e5' }};
            --surface-color: {{ $colors['surface'] ?? '#ffffff' }};
            --font-heading: '{{ $fonts['heading'] ?? 'Playfair Display' }}', serif;
            --font-body: '{{ $fonts['body'] ?? 'Inter' }}', sans-serif;
        }

        h1, h2, h3, h4, h5, h6 { font-family: var(--font-heading); }
        body { font-family: var(--font-body); background-color: var(--surface-color); }
        .bg-primary { background-color: var(--primary-color); }
        .text-primary { color: var(--primary-color); }
        .bg-secondary { background-color: var(--secondary-color); }
        .text-secondary { color: var(--secondary-color); }
        .border-secondary { border-color: var(--secondary-color); }
        .btn-primary { 
            background-color: var(--primary-color); 
            color: white; 
            padding: 0.75rem 1.5rem; 
            border-radius: 0.375rem; 
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-primary:hover { opacity: 0.9; transform: translateY(-1px); }
    </style>
</head>
<body class="antialiased text-slate-900 overflow-x-hidden">
    <!-- Top Bar -->
    <div class="bg-primary text-white py-2 text-xs">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <div class="flex gap-4">
                <span>{{ $settings['contact_phone'] ?? '' }}</span>
                <span>{{ $settings['contact_email'] ?? '' }}</span>
            </div>
            <div class="flex gap-4">
                @auth
                    <a href="{{ route('dashboard') }}" class="hover:underline">Admin Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="hover:underline">Attorney Login</a>
                @endauth
            </div>
        </div>
    </div>

    <!-- Header / Navigation -->
    <nav class="bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="flex items-center gap-2">
                @if(!empty($settings['logo_url']))
                    <img src="{{ $settings['logo_url'] }}" alt="Logo" class="h-10">
                @else
                    <span class="text-2xl font-bold text-primary">{{ $settings['site_name'] ?? 'CPA EXPERT' }}</span>
                @endif
            </a>

            @if($mainMenu)
                <div class="hidden md:flex items-center gap-8">
                    @foreach(json_decode($mainMenu->items) as $item)
                        <a href="{{ $item->url }}" class="text-sm font-semibold text-slate-700 hover:text-primary transition-colors uppercase tracking-wider">{{ $item->title }}</a>
                    @endforeach
                    <a href="#contact" class="bg-secondary text-primary px-6 py-2 rounded font-bold text-sm hover:opacity-90 transition-all">Free Case Review</a>
                </div>
            @endif
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white py-20 mt-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="col-span-2">
                    <h3 class="text-2xl font-bold mb-6 text-secondary">{{ $settings['site_name'] ?? 'CPA EXPERT' }}</h3>
                    <p class="text-slate-400 max-w-sm mb-6">{{ $settings['address'] ?? 'Providing excellence in legal and accounting services.' }}</p>
                    <div class="flex gap-4">
                        <!-- Social Icons Placeholder -->
                    </div>
                </div>
                <div>
                    <h4 class="font-bold mb-6 uppercase text-xs tracking-widest text-slate-500">Quick Links</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        @if($footerMenu)
                            @foreach(json_decode($footerMenu->items) as $item)
                                <li><a href="{{ $item->url }}" class="hover:text-white transition-colors">{{ $item->title }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-6 uppercase text-xs tracking-widest text-slate-500">Practice Areas</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        @foreach($practiceAreas->take(5) as $area)
                            <li><a href="#" class="hover:text-white transition-colors">{{ $area->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-800 mt-20 pt-10 text-center text-sm text-slate-500">
                &copy; {{ date('Y') }} {{ $settings['site_name'] ?? 'CPA EXPERT' }}. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- tawk.to Chatbot -->
    @if(!empty($settings['tawk_property_id']))
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/{{ $settings['tawk_property_id'] }}/default';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
    @endif
</body>
</html>
