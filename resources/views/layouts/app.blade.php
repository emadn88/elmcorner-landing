<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @php
        $seo = app(\App\Services\SeoService::class);
        if (isset($seoData)) {
            if (isset($seoData['title'])) $seo->setTitle($seoData['title']);
            if (isset($seoData['description'])) $seo->setDescription($seoData['description']);
            if (isset($seoData['keywords'])) $seo->setKeywords($seoData['keywords']);
            if (isset($seoData['image'])) $seo->setImage($seoData['image']);
            if (isset($seoData['url'])) $seo->setUrl($seoData['url']);
            if (isset($seoData['type'])) $seo->setType($seoData['type']);
            if (isset($seoData['article'])) $seo->setArticle($seoData['article']);
        }
        $currentUrl = url()->current();
        $baseUrl = config('app.url');
    @endphp
    
    <!-- Primary Meta Tags -->
    <title>{{ $seo->get('title') }}</title>
    <meta name="title" content="{{ $seo->get('title') }}">
    <meta name="description" content="{{ $seo->get('description') }}">
    <meta name="keywords" content="{{ $seo->get('keywords') }}">
    <meta name="author" content="{{ config('app.name', 'ElmCorner') }}">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="googlebot" content="index, follow">
    <meta name="language" content="{{ app()->getLocale() === 'ar' ? 'Arabic' : 'English' }}">
    <meta name="revisit-after" content="7 days">
    <meta name="rating" content="general">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ $seo->get('url') }}">
    
    <!-- Alternate Language Versions (hreflang) -->
    <link rel="alternate" hreflang="en" href="{{ str_replace('/ar/', '/en/', $currentUrl) }}">
    <link rel="alternate" hreflang="ar" href="{{ str_replace('/en/', '/ar/', $currentUrl) }}">
    <link rel="alternate" hreflang="x-default" href="{{ str_replace(['/ar/', '/en/'], '', $currentUrl) }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="{{ $seo->get('type') }}">
    <meta property="og:url" content="{{ $seo->get('url') }}">
    <meta property="og:title" content="{{ $seo->get('title') }}">
    <meta property="og:description" content="{{ $seo->get('description') }}">
    <meta property="og:image" content="{{ $seo->get('image') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="{{ $seo->get('title') }}">
    <meta property="og:site_name" content="{{ $seo->get('site_name') }}">
    <meta property="og:locale" content="{{ app()->getLocale() === 'ar' ? 'ar_AR' : 'en_US' }}">
    <meta property="og:locale:alternate" content="{{ app()->getLocale() === 'ar' ? 'en_US' : 'ar_AR' }}">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ $seo->get('url') }}">
    <meta name="twitter:title" content="{{ $seo->get('title') }}">
    <meta name="twitter:description" content="{{ $seo->get('description') }}">
    <meta name="twitter:image" content="{{ $seo->get('image') }}">
    <meta name="twitter:image:alt" content="{{ $seo->get('title') }}">
    
    <!-- Additional SEO Meta Tags -->
    <meta name="theme-color" content="#22c55e">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="{{ config('app.name', 'ElmCorner') }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
    
    <!-- Preconnect to External Domains for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://www.google-analytics.com">
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    <link rel="dns-prefetch" href="https://wa.me">
    
    <!-- Almarai Font with display=swap for performance -->
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    
    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
        {!! $seo->generateStructuredData() !!}
    </script>
    
    @stack('head')
    
    <!-- Google Tag Manager -->
    @if(config('services.google.tag_manager_id'))
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','{{ config('services.google.tag_manager_id') }}');</script>
    @endif
    
    <!-- Google Analytics & Google Ads -->
    @if(config('services.google.analytics_id'))
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google.analytics_id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ config('services.google.analytics_id') }}', {
            'send_page_view': true,
            'anonymize_ip': true,
            'cookie_flags': 'SameSite=None;Secure'
        });
        
        @if(config('services.google.ads_id'))
        gtag('config', '{{ config('services.google.ads_id') }}');
        @endif
    </script>
    @endif
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900" style="font-family: 'Almarai', sans-serif;">
    <!-- Google Tag Manager (noscript) -->
    @if(config('services.google.tag_manager_id'))
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ config('services.google.tag_manager_id') }}"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    @endif
    
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-gray-900/95 backdrop-blur-md shadow-lg border-b border-gray-800/50" 
         x-data="{ mobileMenuOpen: false, scrolled: false }"
         @scroll.window="scrolled = window.scrollY > 20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16 md:h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="flex items-center space-x-2 rtl:space-x-reverse group">
                        <img src="{{ asset('images/logo.png') }}" alt="ElmCorner Logo - Online Islamic Academy" class="h-10 md:h-12 w-auto transition-transform group-hover:scale-105" loading="eager" width="120" height="120">
                        <span class="text-xl md:text-2xl font-bold bg-gradient-to-r from-islamic-green-500 to-islamic-teal-500 bg-clip-text text-transparent">
                            ElmCorner
                        </span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-1 rtl:space-x-reverse">
                    <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" 
                       class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                        {{ app()->getLocale() === 'ar' ? 'الرئيسية' : 'Home' }}
                    </a>
                    <a href="#about" class="nav-link">{{ __('messages.nav_about') }}</a>
                    <a href="#courses" class="nav-link">{{ __('messages.courses_title') }}</a>
                    <a href="#pricing" class="nav-link">{{ __('messages.nav_pricing') }}</a>
                    <a href="{{ route('blog.index', ['locale' => app()->getLocale()]) }}" 
                       class="nav-link {{ request()->routeIs('blog.*') ? 'active' : '' }}">
                        {{ app()->getLocale() === 'ar' ? 'المدونة' : 'Blog' }}
                    </a>
                    <a href="#enroll" class="nav-link">{{ __('messages.nav_enroll') }}</a>
                    
                    <!-- Language Switcher -->
                    <div class="flex items-center space-x-1 rtl:space-x-reverse ml-4 rtl:ml-0 rtl:mr-4 pl-4 rtl:pl-0 rtl:pr-4 border-l rtl:border-l-0 rtl:border-r border-gray-700">
                        <a href="{{ route('home', ['locale' => 'en']) }}" 
                           class="lang-switch {{ app()->getLocale() === 'en' ? 'active' : '' }}">
                            EN
                        </a>
                        <a href="{{ route('home', ['locale' => 'ar']) }}" 
                           class="lang-switch {{ app()->getLocale() === 'ar' ? 'active' : '' }}">
                            AR
                        </a>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        class="lg:hidden text-gray-300 hover:text-islamic-green-400 transition-colors p-2 rounded-lg hover:bg-gray-800">
                    <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-show="mobileMenuOpen" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div x-show="mobileMenuOpen" 
                 x-cloak
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 transform -translate-y-2"
                 x-transition:enter-end="opacity-100 transform translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 transform translate-y-0"
                 x-transition:leave-end="opacity-0 transform -translate-y-2"
                 class="lg:hidden pb-4 pt-2 border-t border-gray-800">
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" 
                   class="mobile-nav-link">
                    {{ app()->getLocale() === 'ar' ? 'الرئيسية' : 'Home' }}
                </a>
                <a href="#about" class="mobile-nav-link">{{ __('messages.nav_about') }}</a>
                <a href="#courses" class="mobile-nav-link">{{ __('messages.courses_title') }}</a>
                <a href="#pricing" class="mobile-nav-link">{{ __('messages.nav_pricing') }}</a>
                <a href="{{ route('blog.index', ['locale' => app()->getLocale()]) }}" 
                   class="mobile-nav-link">
                    {{ app()->getLocale() === 'ar' ? 'المدونة' : 'Blog' }}
                </a>
                <a href="#enroll" class="mobile-nav-link">{{ __('messages.nav_enroll') }}</a>
                
                <!-- Language Switcher Mobile -->
                <div class="flex items-center gap-2 mt-4 pt-4 border-t border-gray-800">
                    <span class="text-gray-500 text-sm">{{ app()->getLocale() === 'ar' ? 'اللغة:' : 'Language:' }}</span>
                    <a href="{{ route('home', ['locale' => 'en']) }}" 
                       class="flex-1 text-center px-4 py-2 rounded-lg text-sm font-medium transition-colors {{ app()->getLocale() === 'en' ? 'bg-islamic-green-600 text-white' : 'bg-gray-800 text-gray-300 hover:bg-gray-700' }}">
                        English
                    </a>
                    <a href="{{ route('home', ['locale' => 'ar']) }}" 
                       class="flex-1 text-center px-4 py-2 rounded-lg text-sm font-medium transition-colors {{ app()->getLocale() === 'ar' ? 'bg-islamic-green-600 text-white' : 'bg-gray-800 text-gray-300 hover:bg-gray-700' }}">
                        العربية
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Floating WhatsApp Button -->
    <div id="whatsapp-float" 
         class="cursor-move"
         x-data="whatsappFloat()"
         @mousedown="startDrag($event)"
         @touchstart="startDrag($event)">
        <a href="https://wa.me/1234567890?text=Hello%2C%20I%20would%20like%20to%20enroll%20in%20ElmCorner" 
           target="_blank"
           rel="noopener noreferrer"
           class="whatsapp-float-button block"
           @click.stop>
            <svg class="w-14 h-14" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
            </svg>
        </a>
    </div>

    <!-- Footer -->
    <footer class="relative overflow-hidden text-white">
        <!-- Modern Islamic Gradient Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-islamic-green-900/30 via-gray-900 via-islamic-teal-900/20 to-gray-900"></div>
        
        <!-- Animated Mesh Gradient Overlay -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 left-0 w-full h-full" style="background: radial-gradient(circle at 20% 30%, rgba(34, 197, 94, 0.15) 0%, transparent 50%), radial-gradient(circle at 80% 70%, rgba(20, 184, 166, 0.15) 0%, transparent 50%);"></div>
        </div>
        
        <!-- Decorative Islamic Pattern - Less Repetitive -->
        <div class="absolute inset-0 opacity-4">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 300">
                <!-- Single Large Hilal -->
                <g class="text-islamic-green-400" opacity="0.12">
                    <path d="M 200 100 A 50 50 0 1 1 200 200 A 35 35 0 1 0 200 100 Z" fill="currentColor"/>
                </g>
                <!-- Single 8-pointed Star -->
                <g class="text-islamic-teal-400" opacity="0.12">
                    <path d="M 1000 150 L 1015 180 L 1045 180 L 1020 200 L 1030 230 L 1000 215 L 970 230 L 980 200 L 955 180 L 985 180 Z" fill="currentColor"/>
                </g>
            </svg>
        </div>
        
        <!-- Floating Decorative Elements -->
        <div class="absolute top-8 right-12 w-20 h-20 opacity-8 animate-pulse">
            <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-green-400">
                <path d="M 50 20 A 30 30 0 1 1 50 80 A 20 20 0 1 0 50 20 Z" fill="currentColor"/>
            </svg>
        </div>
        <div class="absolute bottom-8 left-12 w-16 h-16 opacity-8 animate-pulse" style="animation-delay: 1.5s;">
            <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-teal-400">
                <path d="M 50 12 L 54 28 L 70 28 L 58 40 L 62 56 L 50 48 L 38 56 L 42 40 L 30 28 L 46 28 Z" fill="currentColor"/>
            </svg>
        </div>
        
        <!-- Gradient Orbs -->
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-islamic-green-500/8 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-islamic-teal-500/8 rounded-full blur-3xl"></div>
        
        <!-- Modern Border Accent -->
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-islamic-green-400/30 to-transparent"></div>
        
        <!-- Content Container -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
                <!-- About -->
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <img src="{{ asset('images/logo.png') }}" alt="ElmCorner Logo - Online Islamic Academy" class="h-12 w-auto drop-shadow-lg" loading="lazy" width="120" height="120">
                        <span class="text-2xl font-bold bg-gradient-to-r from-islamic-green-400 to-islamic-teal-400 bg-clip-text text-transparent">ElmCorner</span>
                    </div>
                    <p class="text-gray-300 leading-relaxed">{{ __('messages.footer_about_desc') }}</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-6 text-white">{{ __('messages.footer_quick_links') }}</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#features" class="text-gray-300 hover:text-islamic-green-400 transition-colors duration-300 flex items-center group">
                                <span class="w-1.5 h-1.5 bg-islamic-green-400 rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                <span class="group-hover:translate-x-1 transition-transform">{{ __('messages.features_title') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="#courses" class="text-gray-300 hover:text-islamic-teal-400 transition-colors duration-300 flex items-center group">
                                <span class="w-1.5 h-1.5 bg-islamic-teal-400 rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                <span class="group-hover:translate-x-1 transition-transform">{{ __('messages.courses_title') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pricing" class="text-gray-300 hover:text-islamic-gold-400 transition-colors duration-300 flex items-center group">
                                <span class="w-1.5 h-1.5 bg-islamic-gold-400 rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                <span class="group-hover:translate-x-1 transition-transform">{{ __('messages.nav_pricing') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="#testimonials" class="text-gray-300 hover:text-islamic-green-400 transition-colors duration-300 flex items-center group">
                                <span class="w-1.5 h-1.5 bg-islamic-green-400 rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                <span class="group-hover:translate-x-1 transition-transform">{{ __('messages.testimonials_title') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="#enroll" class="text-gray-300 hover:text-islamic-teal-400 transition-colors duration-300 flex items-center group">
                                <span class="w-1.5 h-1.5 bg-islamic-teal-400 rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                <span class="group-hover:translate-x-1 transition-transform">{{ __('messages.cta_enroll') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blog.index', ['locale' => app()->getLocale()]) }}" class="text-gray-300 hover:text-islamic-green-400 transition-colors duration-300 flex items-center group">
                                <span class="w-1.5 h-1.5 bg-islamic-green-400 rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                <span class="group-hover:translate-x-1 transition-transform">{{ app()->getLocale() === 'ar' ? 'المدونة' : 'Blog' }}</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-lg font-semibold mb-6 text-white">{{ __('messages.footer_contact') }}</h3>
                    <ul class="space-y-4 text-gray-300">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-3 mt-0.5 text-islamic-green-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="hover:text-islamic-green-400 transition-colors">info@elmcorner.com</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-3 mt-0.5 text-islamic-teal-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span class="hover:text-islamic-teal-400 transition-colors">+1 (555) 123-4567</span>
                        </li>
                    </ul>
                    
                    <!-- Social Media Links -->
                    <div class="mt-6">
                        <h4 class="text-sm font-semibold mb-4 text-white uppercase tracking-wider">Follow Us</h4>
                        <div class="flex items-center space-x-4 rtl:space-x-reverse">
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/profile.php?id=61586584370308" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="social-icon group">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            
                            <!-- Instagram -->
                            <a href="https://www.instagram.com/elm.corner" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="social-icon group">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-700/50 mt-10 pt-8 text-center">
                <p class="text-gray-400">&copy; {{ date('Y') }} ElmCorner. {{ __('messages.footer_rights') }}</p>
            </div>
        </div>
    </footer>
</body>
</html>
