<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="icon" type="image/png" href="https://www.findlaw.com/static/c/images/image/upload/v1751527194/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="https://www.findlaw.com/static/c/images/image/upload/v1751531996/favicon-svg_zbx0ra.svg" />
    <link rel="shortcut icon" href="https://www.findlaw.com/static/c/images/image/upload/v1751527182/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.findlaw.com/static/c/images/image/upload/v1751527167/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="FindLaw" />

    <title>@yield('title', $settings['site_name'] ?? 'CPAExpert & Diverse Law')</title>
    <meta name="description" content="{{ $settings['site_description'] ?? 'Find trusted legal and accounting help.' }}"/>

    <!-- FindLaw Originals -->
    <link rel="stylesheet" id="11803ad6-css" href="https://www.findlaw.com/assets/aemwp/css/min/corporate.css?ver=66bb2360" media="all" />
    
    <!-- Custom Style Overrides -->
    <style>
        :root {
            --primary-color: {{ $colors['primary'] ?? '#FA6400' }};
            --secondary-color: {{ $colors['secondary'] ?? '#e2b13c' }};
        }
        /* Override FindLaw orange if user changed it in admin */
        .st0 { fill: var(--primary-color) !important; }
        .fl-button.primary, .btn-primary { background-color: var(--primary-color) !important; border-color: var(--primary-color) !important; }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="page page-template-home-page antialiased">

<header>
    <div class="fl-header" data-activity-map="main-nav">
        <a class="link-skip-nav" href="#main-content">Skip to main content</a>
        <div class="fl-header-bar">
            <button class="fl-header-bar__menu-button" type="button" aria-label="Menu">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <a class="fl-header-bar__logo-box" href="{{ url('/') }}" aria-label="FindLaw logo">
                @if(!empty($settings['logo_url']))
                    <img src="{{ $settings['logo_url'] }}" alt="Logo" style="height: 48px;">
                @else
                    <svg class="fl-header-bar__logo" xmlns="http://www.w3.org/2000/svg" width="202px" height="64px" viewBox="0 0 200 63">
                        <g>
                            <!-- FindLaw SVG Path - I'll keep the original look but it represents the user's business now -->
                            <path class="st0" d="M1,10.6h23v4.1H5.8v12.5h17v4.2h-17v15.2H1V10.6z"/>
                            <path class="st0" d="M29.9,10.7c1.9,0,3.1,1.5,3.1,3.1c0,1.7-1.2,3.1-3.1,3.1c-1.9,0-3.1-1.5-3.1-3.1 C26.7,12.1,27.9,10.7,29.9,10.7z M27.6,46.6V20.8h4.6v25.8H27.6z"/>
                            <path class="st0" d="M53.8,46.6V29.7c0-3.5-1.7-5.5-5.2-5.5c-4.1,0-7.1,3.2-7.1,8.5v13.8h-4.6V20.8h4.5v5.3 c1.5-3.3,4.3-5.8,8.8-5.8c5.8,0,8.3,3.3,8.3,8.8v17.6H53.8z"/>
                            <path class="st0" d="M71.9,20.2c4.2,0,7,2.2,8.5,5.5V10.6h4.6v36h-4.5v-4.9c-1.6,3.3-4.5,5.5-8.8,5.5c-7.1,0-10.2-5.9-10.2-13.5 C61.6,26.2,64.7,20.2,71.9,20.2z M73.1,43.4c5,0,7.3-4.4,7.3-9.7c0-5.3-2.4-9.7-7.3-9.7c-4.9,0-6.8,4.1-6.8,9.7 C66.3,39.3,68.2,43.4,73.1,43.4z"/>
                            <path class="st0" d="M89.3,10.6H94v31.9h17.3v4.1h-22V10.6z"/>
                            <path class="st0" d="M130.5,46.6v-4.4c-1.8,3.1-4.9,4.9-9,4.9c-5.1,0-8-3-8-7.6c0-5.5,3.7-8,9.1-8h7.8v-2.4c0-3.5-2-5-6.2-5 c-2.9,0-5.6,0.6-8.1,1.8l-0.8-3.7c2.9-1.4,6.2-2.1,9.5-2.1c6.7,0,10.2,2.8,10.2,8.6v17.8H130.5z M130.3,34.9h-7.1 c-3.6,0-5.2,1.6-5.2,4.6c0,2.9,1.8,4.4,4.9,4.4c4.3,0,7.5-3.3,7.5-7.3V34.9z"/>
                            <path class="st0" d="M163.6,41.3l5.4-20.6h4.5l-7.6,25.8h-4.6l-6.2-21.5l-6.3,21.5h-4.6l-7.6-25.8h4.5l5.5,20.6l5.9-20.6h5 L163.6,41.3z"/>
                        </g>
                    </svg>
                @endif
            </a>
            <div class="fl-header-bar__menu fl-header-menu">
                <div class="fl-header-menu__body">
                    <nav class="fl-header-menu__nav" style="display: flex;">
                         @if($mainMenu)
                            <ul class="fl-header-menu__nav-list" style="display: flex; list-style: none; gap: 20px;">
                                @foreach($mainMenu->items as $item)
                                    <li class="fl-header-menu__nav-list-item">
                                        <a class="fl-header-menu__nav-list-item-head fl-text-lg-medium" href="{{ $item['url'] ?? '#' }}">
                                            <p class="fl-header-menu__nav-list-text">{{ $item['label'] ?? '' }}</p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </nav>
                </div>
            </div>
            <div class="fl-header-search">
                  <a href="{{ route('login') }}" class="fl-button primary" style="padding: 10px 20px; text-decoration: none;">Login</a>
            </div>
        </div>
    </div>
</header>

<main id="main-content">
    @yield('content')
</main>

<footer class="bg-slate-900 text-white py-20">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            <div class="col-span-2">
                <h3 class="text-2xl font-bold mb-6 text-primary">{{ $settings['site_name'] ?? 'CPAExpert' }}</h3>
                <p class="text-slate-400 mb-6">{{ $settings['address'] ?? '' }}</p>
            </div>
            <div>
                <h4 class="font-bold mb-6 uppercase text-xs tracking-widest text-slate-500">Resources</h4>
                <ul class="space-y-4 text-sm text-slate-400">
                    @if($footerMenu)
                        @foreach($footerMenu->items as $item)
                            <li><a href="{{ $item['url'] ?? '#' }}" class="hover:text-white transition-colors">{{ $item['label'] ?? '' }}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <div class="border-t border-slate-800 mt-20 pt-10 text-center text-sm text-slate-500">
            {{ $settings['footer_text'] ?? '© 2026 CPAExpert & Diverse Law. All rights reserved.' }}
        </div>
    </div>
</footer>

<script src="https://www.findlaw.com/assets/aemwp/javascript/min/corporate.js?ver=66bb2360"></script>
@if(!empty($settings['tawk_property_id']))
    <!-- tawk.to placeholder -->
@endif
</body>
</html>
