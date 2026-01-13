@extends('layouts.app')

@section('content')
    <!-- Blog Listing Section -->
    <section class="section-padding relative overflow-hidden text-white min-h-screen" style="padding-top: 8rem;">
        <!-- Decorative Vector - Top Left -->
        <div class="absolute top-10 left-10 w-24 h-24 md:w-32 md:h-32 lg:w-40 lg:h-40 z-30 opacity-10 pointer-events-none">
            <img src="{{ asset('images/decorative1.png') }}" alt="" class="w-full h-full object-contain" loading="lazy" decoding="async">
        </div>
        
        <!-- Modern Gradient Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-islamic-green-900/20 via-gray-800 via-islamic-teal-900/20 to-gray-900"></div>
        
        <!-- Decorative Tile Pattern Background -->
        <div class="absolute inset-0 opacity-[0.06] z-0">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120">
                <defs>
                    <pattern id="blog-tile-pattern" x="0" y="0" width="120" height="120" patternUnits="userSpaceOnUse">
                        <!-- Islamic Geometric Tile -->
                        <polygon points="60,5 70,25 90,25 75,40 85,60 60,50 35,60 45,40 30,25 50,25" fill="none" stroke="currentColor" stroke-width="0.4" opacity="0.2"/>
                        <circle cx="60" cy="30" r="20" fill="none" stroke="currentColor" stroke-width="0.3" opacity="0.15"/>
                        <path d="M 60 5 L 60 60 M 30 30 L 90 30" stroke="currentColor" stroke-width="0.3" opacity="0.12"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#blog-tile-pattern)" class="text-islamic-green-300"/>
            </svg>
        </div>
        
        <!-- Gradient Orbs -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-islamic-green-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-islamic-teal-500/10 rounded-full blur-3xl"></div>
        
        <!-- Content Container -->
        <div class="relative z-10 max-w-7xl mx-auto">
            <!-- Page Header -->
            <div class="text-center mb-16 fade-in-on-scroll">
                <!-- Decorative Title Container -->
                <div class="relative inline-block mb-6">
                    <!-- Decorative Background Pattern -->
                    <div class="absolute inset-0 bg-gradient-to-r from-islamic-green-500/20 via-islamic-teal-500/20 to-islamic-green-500/20 rounded-2xl blur-xl"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-islamic-green-600/10 to-islamic-teal-600/10 rounded-2xl"></div>
                    
                    <!-- Decorative Border -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-islamic-green-400/30 via-islamic-teal-400/30 to-islamic-green-400/30 rounded-2xl blur-sm"></div>
                    <div class="relative bg-gradient-to-br from-gray-800/60 to-gray-900/60 backdrop-blur-sm px-8 md:px-12 py-4 md:py-6 rounded-2xl border border-islamic-green-400/30 shadow-2xl">
                        <!-- Decorative Corner Elements -->
                        <div class="absolute top-2 left-2 w-6 h-6 opacity-40">
                            <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-green-400">
                                <polygon points="50,10 60,40 90,40 65,60 75,90 50,75 25,90 35,60 10,40 40,40" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="absolute top-2 right-2 w-6 h-6 opacity-40">
                            <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-teal-400">
                                <polygon points="50,5 61,35 95,35 68,57 79,91 50,70 21,91 32,57 5,35 39,35" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="absolute bottom-2 left-2 w-6 h-6 opacity-40">
                            <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-teal-400">
                                <circle cx="50" cy="50" r="45" fill="none" stroke="currentColor" stroke-width="3"/>
                                <circle cx="50" cy="50" r="25" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="absolute bottom-2 right-2 w-6 h-6 opacity-40">
                            <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-green-400">
                                <polygon points="50,10 90,30 90,70 50,90 10,70 10,30" fill="currentColor"/>
                            </svg>
                        </div>
                        
                        <h1 class="text-4xl md:text-5xl font-bold text-white mb-0 relative z-10 drop-shadow-lg">
                            {{ app()->getLocale() === 'ar' ? 'المدونة' : 'Our Blog' }}
                        </h1>
                    </div>
                </div>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    {{ app()->getLocale() === 'ar' ? 'اكتشف مقالاتنا التعليمية والإسلامية' : 'Discover our educational and Islamic articles' }}
                </p>
            </div>

            <!-- Blog Posts Grid -->
            @if($posts->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    @foreach($posts as $post)
                        @php
                            $postUrl = route('blog.show', ['locale' => app()->getLocale(), 'slug' => app()->getLocale() === 'ar' ? $post->slug_ar : $post->slug_en]);
                        @endphp
                        <article class="fade-in-on-scroll bg-gradient-to-br from-gray-800/80 to-gray-700/80 backdrop-blur-sm rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-600/50 flex flex-col group">
                            <!-- Featured Image - Clickable -->
                            <a href="{{ $postUrl }}" class="relative h-48 overflow-hidden bg-gradient-to-br from-islamic-green-500/20 to-islamic-teal-500/20 block cursor-pointer">
                                @if($post->featured_image)
                                    <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" loading="lazy" decoding="async">
                                @else
                                    <div class="w-full h-full flex items-center justify-center">
                                        <svg class="w-24 h-24 text-islamic-green-400/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                @endif
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-transparent to-transparent"></div>
                                
                                <!-- Decorative Corner -->
                                <div class="absolute top-3 right-3 w-8 h-8 opacity-40">
                                    <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-green-400">
                                        <polygon points="50,10 60,40 90,40 65,60 75,90 50,75 25,90 35,60 10,40 40,40" fill="currentColor"/>
                                    </svg>
                                </div>
                            </a>
                            
                            <!-- Post Content -->
                            <div class="p-6 flex flex-col flex-grow">
                                <!-- Meta Info -->
                                <div class="flex items-center gap-3 mb-3 text-sm text-gray-400">
                                    <div class="flex items-center gap-1">
                                        <svg class="w-4 h-4 text-islamic-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        <span>{{ $post->author_name }}</span>
                                    </div>
                                    <span class="text-gray-600">•</span>
                                    <div class="flex items-center gap-1">
                                        <svg class="w-4 h-4 text-islamic-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span>{{ $post->formatted_published_date }}</span>
                                    </div>
                                </div>
                                
                                <!-- Title - Clickable -->
                                <a href="{{ $postUrl }}" class="block mb-3">
                                    <h2 class="text-2xl font-bold text-white group-hover:text-islamic-green-400 transition-colors line-clamp-2 cursor-pointer">
                                        {{ $post->title }}
                                    </h2>
                                </a>
                                
                                <!-- Excerpt - Clickable -->
                                <a href="{{ $postUrl }}" class="block mb-4 flex-grow cursor-pointer">
                                    <p class="text-gray-300 line-clamp-3 group-hover:text-gray-200 transition-colors">
                                        {{ $post->excerpt }}
                                    </p>
                                </a>
                                
                                <!-- Read More Button -->
                                <a href="{{ $postUrl }}" 
                                   class="inline-flex items-center gap-2 text-islamic-green-400 hover:text-islamic-green-300 font-semibold transition-colors group-hover:gap-3 duration-300">
                                    <span>{{ app()->getLocale() === 'ar' ? 'اقرأ المزيد' : 'Read More' }}</span>
                                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="flex justify-center">
                    {{ $posts->links() }}
                </div>
            @else
                <!-- Empty State -->
                <div class="text-center py-20">
                    <div class="inline-block p-8 bg-gradient-to-br from-gray-800/80 to-gray-700/80 backdrop-blur-sm rounded-2xl border border-gray-600/50">
                        <svg class="w-24 h-24 mx-auto text-gray-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <h3 class="text-2xl font-bold text-white mb-2">
                            {{ app()->getLocale() === 'ar' ? 'لا توجد مقالات بعد' : 'No posts yet' }}
                        </h3>
                        <p class="text-gray-400">
                            {{ app()->getLocale() === 'ar' ? 'سنضيف مقالات قريباً' : 'We will add posts soon' }}
                        </p>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
