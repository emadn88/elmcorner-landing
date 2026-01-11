<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center overflow-hidden islamic-bg" id="hero">
        <!-- Decorative Vector - Top Right -->
        <div class="absolute top-10 right-10 w-24 h-24 md:w-32 md:h-32 lg:w-40 lg:h-40 z-30 opacity-10 pointer-events-none">
            <img src="<?php echo e(asset('images/decorative1.png')); ?>" alt="Decorative" class="w-full h-full object-contain">
        </div>
        
        <!-- Dark Overlay for better text readability -->
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900/95 via-gray-900/80 to-gray-900/95 z-10"></div>
        
        <!-- Animated Background Pattern -->
        <div class="absolute inset-0 opacity-10 z-0">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"100\" height=\"100\" viewBox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z\" fill=\"%23ffffff\" fill-opacity=\"0.1\" fill-rule=\"evenodd\"/%3E%3C/svg%3E');"></div>
        </div>


        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <!-- Left Side: Content -->
                <div class="fade-in-on-scroll text-center lg:text-left rtl:lg:text-right order-1 rtl:lg:order-2">
                    <!-- Logo Animation -->
                    <div class="mb-6 flex justify-center lg:justify-start rtl:lg:justify-end animate-float">
                        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="ElmCorner Logo" class="h-32 md:h-40 lg:h-48 w-auto drop-shadow-2xl">
                    </div>

                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4 text-shadow-lg leading-tight text-center lg:text-left rtl:lg:text-right">
                        <?php echo e(__('messages.hero_title')); ?>

                    </h1>
                    <p class="text-base md:text-lg text-gray-200 mb-6 max-w-xl mx-auto lg:mx-0 rtl:lg:mx-0 text-shadow text-center lg:text-left rtl:lg:text-right">
                        <?php echo e(__('messages.hero_subtitle')); ?>

                    </p>

                    <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start rtl:lg:justify-end">
                        <a href="#enroll" class="btn-secondary text-base px-8 py-3 inline-block text-center">
                            <?php echo e(__('messages.cta_enroll')); ?>

                        </a>
                        <a href="#courses" class="bg-white/10 backdrop-blur-sm text-white px-8 py-3 rounded-lg font-semibold border-2 border-white/30 hover:bg-white/20 transition-all duration-300 text-base inline-block text-center">
                            <?php echo e(__('messages.cta_learn_more')); ?>

                        </a>
                    </div>
                </div>

                <!-- Right Side: Image -->
                <div class="fade-in-on-scroll relative order-2 rtl:lg:order-1">
                    <div class="hero-image-container">
                        <div class="hero-image-glow"></div>
                        
                        <!-- Decorative Border Pattern -->
                        <div class="absolute inset-0 border-2 border-islamic-green-400/20 rounded-3xl z-10 pointer-events-none"></div>
                        <div class="absolute inset-4 border border-islamic-teal-400/15 rounded-2xl z-10 pointer-events-none"></div>
                        
                        <img 
                            src="<?php echo e(asset('images/3.png')); ?>" 
                            alt="Islamic Education" 
                            class="hero-main-image"
                        />
                        <div class="hero-image-overlay"></div>

                        <!-- Only 4 Corner Shapes -->
                        <!-- Top Left Corner -->
                        <div class="absolute -top-3 -left-3 w-8 h-8 z-20 opacity-40">
                            <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-green-400">
                                <polygon points="50,10 60,40 90,40 65,60 75,90 50,75 25,90 35,60 10,40 40,40" fill="currentColor"/>
                            </svg>
                        </div>

                        <!-- Top Right Corner -->
                        <div class="absolute -top-3 -right-3 w-8 h-8 z-20 opacity-40">
                            <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-teal-400">
                                <polygon points="50,5 61,35 95,35 68,57 79,91 50,70 21,91 32,57 5,35 39,35" fill="currentColor"/>
                            </svg>
                        </div>

                        <!-- Bottom Left Corner -->
                        <div class="absolute -bottom-3 -left-3 w-8 h-8 z-20 opacity-40">
                            <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-teal-400">
                                <circle cx="50" cy="50" r="45" fill="none" stroke="currentColor" stroke-width="3"/>
                                <circle cx="50" cy="50" r="25" fill="currentColor"/>
                            </svg>
                        </div>

                        <!-- Bottom Right Corner -->
                        <div class="absolute -bottom-3 -right-3 w-8 h-8 z-20 opacity-40">
                            <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-green-400">
                                <polygon points="50,10 90,30 90,70 50,90 10,70 10,30" fill="currentColor"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics Cards - Full Width Below Content -->
            <div class="mt-12 fade-in-on-scroll">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <!-- Stat Card 1: Teaching Hours -->
                    <div class="stat-card stat-card-green group relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-islamic-green-600/30 via-islamic-green-700/20 to-islamic-green-600/30"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                        <div class="absolute top-0 right-0 w-20 h-20 bg-islamic-green-400/10 rounded-full blur-2xl"></div>
                        <div class="relative z-10 p-5">
                            <div class="flex items-center justify-between mb-3">
                                <div class="stat-icon stat-icon-green">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="w-8 h-8 opacity-20">
                                    <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-green-400">
                                        <polygon points="50,5 61,35 95,35 68,57 79,91 50,70 21,91 32,57 5,35 39,35" fill="currentColor"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-2 leading-none" x-data="{ count: 0, target: 5000 }" x-init="setInterval(() => { if(count < target) count += 50 }, 10)">
                                <span x-text="count.toLocaleString()">0</span><span class="text-islamic-green-400">+</span>
                            </div>
                            <div class="text-xs md:text-sm font-medium text-gray-300 uppercase tracking-wider"><?php echo e(__('messages.stat_teaching_hours')); ?></div>
                        </div>
                    </div>

                    <!-- Stat Card 2: Active Students -->
                    <div class="stat-card stat-card-teal group relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-islamic-teal-600/30 via-islamic-teal-700/20 to-islamic-teal-600/30"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                        <div class="absolute top-0 right-0 w-20 h-20 bg-islamic-teal-400/10 rounded-full blur-2xl"></div>
                        <div class="relative z-10 p-5">
                            <div class="flex items-center justify-between mb-3">
                                <div class="stat-icon stat-icon-teal">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>
                                </div>
                                <div class="w-8 h-8 opacity-20">
                                    <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-teal-400">
                                        <polygon points="50,5 61,35 95,35 68,57 79,91 50,70 21,91 32,57 5,35 39,35" fill="currentColor"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-2 leading-none" x-data="{ count: 0, target: 1200 }" x-init="setInterval(() => { if(count < target) count += 12 }, 10)">
                                <span x-text="count.toLocaleString()">0</span><span class="text-islamic-teal-400">+</span>
                            </div>
                            <div class="text-xs md:text-sm font-medium text-gray-300 uppercase tracking-wider"><?php echo e(__('messages.stat_active_students')); ?></div>
                        </div>
                    </div>

                    <!-- Stat Card 3: Expert Teachers -->
                    <div class="stat-card stat-card-green group relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-islamic-green-600/30 via-islamic-teal-600/20 to-islamic-green-600/30"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                        <div class="absolute top-0 right-0 w-20 h-20 bg-islamic-green-400/10 rounded-full blur-2xl"></div>
                        <div class="relative z-10 p-5">
                            <div class="flex items-center justify-between mb-3">
                                <div class="stat-icon stat-icon-green">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                    </svg>
                                </div>
                                <div class="w-8 h-8 opacity-20">
                                    <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-green-400">
                                        <polygon points="50,10 90,30 90,70 50,90 10,70 10,30" fill="currentColor"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-2 leading-none" x-data="{ count: 0, target: 50 }" x-init="setInterval(() => { if(count < target) count += 1 }, 20)">
                                <span x-text="count">0</span><span class="text-islamic-green-400">+</span>
                            </div>
                            <div class="text-xs md:text-sm font-medium text-gray-300 uppercase tracking-wider"><?php echo e(__('messages.stat_expert_teachers')); ?></div>
                        </div>
                    </div>

                    <!-- Stat Card 4: Countries -->
                    <div class="stat-card stat-card-teal group relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-islamic-teal-600/30 via-islamic-green-600/20 to-islamic-teal-600/30"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                        <div class="absolute top-0 right-0 w-20 h-20 bg-islamic-teal-400/10 rounded-full blur-2xl"></div>
                        <div class="relative z-10 p-5">
                            <div class="flex items-center justify-between mb-3">
                                <div class="stat-icon stat-icon-teal">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 002 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="w-8 h-8 opacity-20">
                                    <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-teal-400">
                                        <circle cx="50" cy="50" r="45" fill="none" stroke="currentColor" stroke-width="3"/>
                                        <circle cx="50" cy="50" r="25" fill="currentColor"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-2 leading-none" x-data="{ count: 0, target: 25 }" x-init="setInterval(() => { if(count < target) count += 1 }, 30)">
                                <span x-text="count">0</span><span class="text-islamic-teal-400">+</span>
                            </div>
                            <div class="text-xs md:text-sm font-medium text-gray-300 uppercase tracking-wider"><?php echo e(__('messages.stat_countries')); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-20 animate-bounce">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section-padding relative overflow-hidden text-white">
        <!-- Decorative Vector - Top Left -->
        <div class="absolute top-8 left-8 w-20 h-20 md:w-28 md:h-28 lg:w-36 lg:h-36 z-30 opacity-10 pointer-events-none">
            <img src="<?php echo e(asset('images/decorative1.png')); ?>" alt="Decorative" class="w-full h-full object-contain">
        </div>
        
        <!-- Decorative Background Layers -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-800 via-gray-900 via-islamic-green-900/20 to-gray-800"></div>
        
        <!-- Animated Pattern Overlay -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"100\" height=\"100\" viewBox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z\" fill=\"%23ffffff\" fill-opacity=\"0.1\" fill-rule=\"evenodd\"/%3E%3C/svg%3E');"></div>
        </div>
        
        <!-- Decorative Corner Elements -->
        <div class="absolute top-0 left-0 w-64 h-64 opacity-5">
            <svg viewBox="0 0 200 200" class="w-full h-full text-islamic-green-400">
                <polygon points="50,10 60,40 90,40 65,60 75,90 50,75 25,90 35,60 10,40 40,40" fill="currentColor"/>
            </svg>
        </div>
        <div class="absolute top-0 right-0 w-64 h-64 opacity-5">
            <svg viewBox="0 0 200 200" class="w-full h-full text-islamic-teal-400">
                <polygon points="50,5 61,35 95,35 68,57 79,91 50,70 21,91 32,57 5,35 39,35" fill="currentColor"/>
            </svg>
        </div>
        <div class="absolute bottom-0 left-0 w-64 h-64 opacity-5">
            <svg viewBox="0 0 200 200" class="w-full h-full text-islamic-teal-400">
                <circle cx="100" cy="100" r="90" fill="none" stroke="currentColor" stroke-width="6"/>
                <circle cx="100" cy="100" r="50" fill="currentColor"/>
            </svg>
        </div>
        <div class="absolute bottom-0 right-0 w-64 h-64 opacity-5">
            <svg viewBox="0 0 200 200" class="w-full h-full text-islamic-green-400">
                <polygon points="100,20 180,60 180,140 100,180 20,140 20,60" fill="currentColor"/>
            </svg>
        </div>
        
        <!-- Gradient Orbs for Depth -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-islamic-green-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-islamic-teal-500/10 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 right-1/3 w-72 h-72 bg-islamic-gold-500/5 rounded-full blur-3xl"></div>
        
        <!-- Content Container -->
        <div class="relative z-10 max-w-7xl mx-auto">
            <div class="text-center mb-16 fade-in-on-scroll">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    <?php echo e(__('messages.features_title')); ?>

                </h2>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    <?php echo e(__('messages.features_subtitle')); ?>

                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div class="fade-in-on-scroll bg-gradient-to-br from-gray-700/80 to-gray-800/80 backdrop-blur-sm p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-700">
                    <div class="w-48 h-32 md:w-56 md:h-40 lg:w-64 lg:h-44 mx-auto mb-6 rounded-xl overflow-hidden bg-gradient-to-br from-islamic-green-500/20 to-islamic-green-600/20 p-2 flex items-center justify-center">
                        <img src="<?php echo e(asset('images/all_ages.png')); ?>" alt="All Ages Welcome" class="w-full h-full object-contain rounded-lg">
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 text-center">
                        <?php echo e(__('messages.feature_multi_age')); ?>

                    </h3>
                    <p class="text-gray-300 text-center">
                        <?php echo e(__('messages.feature_multi_age_desc')); ?>

                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="fade-in-on-scroll bg-gradient-to-br from-gray-700/80 to-gray-800/80 backdrop-blur-sm p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-700">
                    <div class="w-48 h-32 md:w-56 md:h-40 lg:w-64 lg:h-44 mx-auto mb-6 rounded-xl overflow-hidden bg-gradient-to-br from-islamic-teal-500/20 to-islamic-teal-600/20 p-2 flex items-center justify-center">
                        <img src="<?php echo e(asset('images/anyware.png')); ?>" alt="Learn from Anywhere" class="w-full h-full object-contain rounded-lg">
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 text-center">
                        <?php echo e(__('messages.feature_global')); ?>

                    </h3>
                    <p class="text-gray-300 text-center">
                        <?php echo e(__('messages.feature_global_desc')); ?>

                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="fade-in-on-scroll bg-gradient-to-br from-gray-700/80 to-gray-800/80 backdrop-blur-sm p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-700">
                    <div class="w-48 h-32 md:w-56 md:h-40 lg:w-64 lg:h-44 mx-auto mb-6 rounded-xl overflow-hidden bg-gradient-to-br from-islamic-gold-500/20 to-islamic-gold-600/20 p-2 flex items-center justify-center">
                        <img src="<?php echo e(asset('images/instructurs.png')); ?>" alt="Qualified Instructors" class="w-full h-full object-contain rounded-lg">
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 text-center">
                        <?php echo e(__('messages.feature_qualified')); ?>

                    </h3>
                    <p class="text-gray-300 text-center">
                        <?php echo e(__('messages.feature_qualified_desc')); ?>

                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="fade-in-on-scroll bg-gradient-to-br from-gray-700/80 to-gray-800/80 backdrop-blur-sm p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-700">
                    <div class="w-48 h-32 md:w-56 md:h-40 lg:w-64 lg:h-44 mx-auto mb-6 rounded-xl overflow-hidden bg-gradient-to-br from-islamic-teal-500/20 to-islamic-green-600/20 p-2 flex items-center justify-center">
                        <img src="<?php echo e(asset('images/schedule.png')); ?>" alt="Flexible Schedule" class="w-full h-full object-contain rounded-lg">
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 text-center">
                        <?php echo e(__('messages.feature_flexible')); ?>

                    </h3>
                    <p class="text-gray-300 text-center">
                        <?php echo e(__('messages.feature_flexible_desc')); ?>

                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="section-padding relative overflow-hidden text-white">
        <!-- Decorative Vector - Top Right -->
        <div class="absolute top-12 right-12 w-24 h-24 md:w-32 md:h-32 lg:w-40 lg:h-40 z-30 opacity-10 pointer-events-none">
            <img src="<?php echo e(asset('images/decorative1.png')); ?>" alt="Decorative" class="w-full h-full object-contain">
        </div>
        
        <!-- Modern Gradient Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-islamic-green-900/20 via-gray-800 via-islamic-teal-900/20 to-gray-900"></div>
        
        <!-- Animated Mesh Gradient Overlay -->
        <div class="absolute inset-0 opacity-15">
            <div class="absolute top-0 left-0 w-full h-full" style="background: radial-gradient(circle at 30% 40%, rgba(34, 197, 94, 0.12) 0%, transparent 50%), radial-gradient(circle at 70% 60%, rgba(20, 184, 166, 0.12) 0%, transparent 50%);"></div>
        </div>
        
        <!-- Decorative Islamic Pattern -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600">
                <defs>
                    <pattern id="about-dots" width="60" height="60" patternUnits="userSpaceOnUse">
                        <circle cx="30" cy="30" r="1.5" fill="currentColor" opacity="0.2"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#about-dots)" class="text-islamic-green-300"/>
                
                <!-- Islamic Elements -->
                <g class="text-islamic-green-400" opacity="0.1">
                    <path d="M 200 150 L 210 170 L 230 170 L 215 185 L 220 205 L 200 195 L 180 205 L 185 185 L 170 170 L 190 170 Z" fill="currentColor"/>
                </g>
                <g class="text-islamic-teal-400" opacity="0.1">
                    <path d="M 1000 400 A 30 30 0 1 1 1000 460 A 20 20 0 1 0 1000 400 Z" fill="currentColor"/>
                </g>
            </svg>
        </div>
        
        <!-- Gradient Orbs -->
        <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-islamic-green-500/8 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 left-1/4 w-96 h-96 bg-islamic-teal-500/8 rounded-full blur-3xl"></div>
        
        <!-- Content Container -->
        <div class="relative z-10 max-w-7xl mx-auto">
            <div class="text-center mb-16 fade-in-on-scroll">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    <?php echo e(__('messages.about_title')); ?>

                </h2>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    <?php echo e(__('messages.about_subtitle')); ?>

                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Side: Image -->
                <div class="fade-in-on-scroll order-2 lg:order-1">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-islamic-green-500/20 to-islamic-teal-500/20 rounded-3xl blur-2xl"></div>
                        <div class="relative bg-gradient-to-br from-gray-800/90 to-gray-700/90 backdrop-blur-sm rounded-3xl p-8 border border-gray-600/50 shadow-2xl">
                            <img src="<?php echo e(asset('images/about.png')); ?>" alt="About ElmCorner" class="w-full h-auto rounded-2xl object-cover">
                        </div>
                    </div>
                </div>

                <!-- Right Side: Content -->
                <div class="fade-in-on-scroll order-1 lg:order-2 space-y-8">
                    <div>
                        <p class="text-lg text-gray-300 leading-relaxed mb-6">
                            <?php echo e(__('messages.about_desc')); ?>

                        </p>
                    </div>

                    <!-- Mission Card -->
                    <div class="bg-gradient-to-br from-gray-800/80 to-gray-700/80 backdrop-blur-sm p-6 rounded-2xl border border-gray-600/50 hover:border-islamic-green-500/50 transition-all duration-300">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0">
                                <div class="w-16 h-16 bg-gradient-to-br from-islamic-green-500 to-islamic-green-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-white mb-2">
                                    <?php echo e(__('messages.about_mission')); ?>

                                </h3>
                                <p class="text-gray-300 leading-relaxed">
                                    <?php echo e(__('messages.about_mission_desc')); ?>

                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Vision Card -->
                    <div class="bg-gradient-to-br from-gray-800/80 to-gray-700/80 backdrop-blur-sm p-6 rounded-2xl border border-gray-600/50 hover:border-islamic-teal-500/50 transition-all duration-300">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0">
                                <div class="w-16 h-16 bg-gradient-to-br from-islamic-teal-500 to-islamic-teal-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-white mb-2">
                                    <?php echo e(__('messages.about_vision')); ?>

                                </h3>
                                <p class="text-gray-300 leading-relaxed">
                                    <?php echo e(__('messages.about_vision_desc')); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Images Row -->
            <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="fade-in-on-scroll bg-gradient-to-br from-gray-800/80 to-gray-700/80 backdrop-blur-sm p-6 rounded-2xl border border-gray-600/50 hover:border-islamic-green-500/50 transition-all duration-300">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-20 h-20 rounded-xl overflow-hidden bg-gradient-to-br from-islamic-green-500/20 to-islamic-green-600/20 p-2 flex items-center justify-center">
                            <img src="<?php echo e(asset('images/all_ages.png')); ?>" alt="All Ages" class="w-full h-full object-contain">
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-white"><?php echo e(__('messages.feature_multi_age')); ?></h4>
                            <p class="text-gray-400 text-sm"><?php echo e(__('messages.feature_multi_age_desc')); ?></p>
                        </div>
                    </div>
                </div>

                <div class="fade-in-on-scroll bg-gradient-to-br from-gray-800/80 to-gray-700/80 backdrop-blur-sm p-6 rounded-2xl border border-gray-600/50 hover:border-islamic-teal-500/50 transition-all duration-300">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-20 h-20 rounded-xl overflow-hidden bg-gradient-to-br from-islamic-teal-500/20 to-islamic-teal-600/20 p-2 flex items-center justify-center">
                            <img src="<?php echo e(asset('images/schedule.png')); ?>" alt="Flexible Schedule" class="w-full h-full object-contain">
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-white"><?php echo e(__('messages.feature_flexible')); ?></h4>
                            <p class="text-gray-400 text-sm"><?php echo e(__('messages.feature_flexible_desc')); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="section-padding relative overflow-hidden text-white">
        <!-- Decorative Vector - Top Left Corner -->
        <div class="absolute top-10 left-10 w-24 h-24 md:w-32 md:h-32 lg:w-40 lg:h-40 z-30 opacity-10 pointer-events-none">
            <img src="<?php echo e(asset('images/decorative1.png')); ?>" alt="Decorative" class="w-full h-full object-contain">
        </div>
        
        <!-- Modern Gradient Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-islamic-teal-900/30 via-gray-800 via-islamic-gold-900/20 to-gray-900"></div>
        
        <!-- Animated Mesh Gradient Overlay -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 left-0 w-full h-full" style="background: radial-gradient(circle at 20% 50%, rgba(34, 197, 94, 0.15) 0%, transparent 50%), radial-gradient(circle at 80% 80%, rgba(20, 184, 166, 0.15) 0%, transparent 50%), radial-gradient(circle at 40% 20%, rgba(234, 179, 8, 0.1) 0%, transparent 50%);"></div>
        </div>
        
        <!-- Decorative Islamic Vector Pattern -->
        <div class="absolute inset-0 opacity-8">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600">
                <!-- Islamic Geometric Pattern -->
                <defs>
                    <pattern id="islamic-dots" width="50" height="50" patternUnits="userSpaceOnUse">
                        <circle cx="25" cy="25" r="1.5" fill="currentColor" opacity="0.3"/>
                    </pattern>
                    <pattern id="islamic-grid" width="80" height="80" patternUnits="userSpaceOnUse">
                        <path d="M 80 0 L 0 0 0 80" fill="none" stroke="currentColor" stroke-width="0.5" opacity="0.2"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#islamic-dots)" class="text-islamic-green-400"/>
                <rect width="100%" height="100%" fill="url(#islamic-grid)" class="text-islamic-teal-400"/>
                
                <!-- Hilal (Crescent Moons) -->
                <g class="text-islamic-green-400" opacity="0.25">
                    <!-- Crescent Moon 1 -->
                    <path d="M 150 100 A 30 30 0 1 1 150 160 A 20 20 0 1 0 150 100 Z" fill="currentColor"/>
                    <!-- Crescent Moon 2 -->
                    <path d="M 1050 350 A 35 35 0 1 1 1050 420 A 25 25 0 1 0 1050 350 Z" fill="currentColor"/>
                    <!-- Crescent Moon 3 -->
                    <path d="M 600 50 A 25 25 0 1 1 600 100 A 18 18 0 1 0 600 50 Z" fill="currentColor"/>
                </g>
                
                <!-- Islamic Stars (8-pointed) -->
                <g class="text-islamic-teal-400" opacity="0.25">
                    <!-- 8-pointed Star 1 -->
                    <path d="M 200 400 L 210 420 L 230 420 L 215 435 L 220 455 L 200 445 L 180 455 L 185 435 L 170 420 L 190 420 Z" fill="currentColor"/>
                    <!-- 8-pointed Star 2 -->
                    <path d="M 1000 200 L 1012 220 L 1032 220 L 1016 235 L 1022 255 L 1000 245 L 978 255 L 984 235 L 968 220 L 988 220 Z" fill="currentColor"/>
                    <!-- 8-pointed Star 3 -->
                    <path d="M 400 100 L 408 115 L 423 115 L 412 125 L 417 140 L 400 133 L 383 140 L 388 125 L 377 115 L 392 115 Z" fill="currentColor"/>
                </g>
                
                <!-- Islamic Stars (6-pointed) -->
                <g class="text-islamic-gold-400" opacity="0.2">
                    <!-- 6-pointed Star 1 -->
                    <path d="M 300 300 L 310 320 L 330 320 L 315 335 L 320 355 L 300 345 L 280 355 L 285 335 L 270 320 L 290 320 Z" fill="currentColor"/>
                    <!-- 6-pointed Star 2 -->
                    <path d="M 900 450 L 910 470 L 930 470 L 915 485 L 920 505 L 900 495 L 880 505 L 885 485 L 870 470 L 890 470 Z" fill="currentColor"/>
                </g>
                
                <!-- Islamic Geometric Patterns (Arabesque-inspired curves) -->
                <g class="text-islamic-green-400" opacity="0.15">
                    <path d="M 50 250 Q 100 200, 150 250 T 250 250 T 350 250" fill="none" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M 850 150 Q 900 100, 950 150 T 1050 150 T 1150 150" fill="none" stroke="currentColor" stroke-width="1.5"/>
                </g>
            </svg>
        </div>
        
        <!-- Floating Islamic Decorative Elements -->
        <!-- Hilal (Crescent Moon) 1 -->
        <div class="absolute top-20 left-10 w-32 h-32 opacity-15 animate-pulse">
            <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-green-400">
                <path d="M 50 20 A 30 30 0 1 1 50 80 A 20 20 0 1 0 50 20 Z" fill="currentColor"/>
            </svg>
        </div>
        <!-- 8-pointed Islamic Star -->
        <div class="absolute top-40 right-20 w-24 h-24 opacity-15 animate-pulse" style="animation-delay: 1s;">
            <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-teal-400">
                <path d="M 50 10 L 55 30 L 75 30 L 60 45 L 65 65 L 50 55 L 35 65 L 40 45 L 25 30 L 45 30 Z" fill="currentColor"/>
            </svg>
        </div>
        <!-- Hilal (Crescent Moon) 2 -->
        <div class="absolute bottom-32 left-1/4 w-28 h-28 opacity-15 animate-pulse" style="animation-delay: 2s;">
            <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-gold-400">
                <path d="M 50 25 A 25 25 0 1 1 50 75 A 18 18 0 1 0 50 25 Z" fill="currentColor"/>
            </svg>
        </div>
        <!-- 6-pointed Islamic Star -->
        <div class="absolute bottom-20 right-1/3 w-36 h-36 opacity-15 animate-pulse" style="animation-delay: 0.5s;">
            <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-green-400">
                <path d="M 50 15 L 55 35 L 75 35 L 60 50 L 65 70 L 50 60 L 35 70 L 40 50 L 25 35 L 45 35 Z" fill="currentColor"/>
            </svg>
        </div>
        <!-- Additional Hilal -->
        <div class="absolute top-1/2 right-10 w-20 h-20 opacity-12 animate-pulse" style="animation-delay: 1.5s;">
            <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-teal-400">
                <path d="M 50 30 A 20 20 0 1 1 50 70 A 15 15 0 1 0 50 30 Z" fill="currentColor"/>
            </svg>
        </div>
        <!-- Additional 8-pointed Star -->
        <div class="absolute bottom-1/3 left-20 w-24 h-24 opacity-12 animate-pulse" style="animation-delay: 0.8s;">
            <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-gold-400">
                <path d="M 50 12 L 54 28 L 70 28 L 58 40 L 62 56 L 50 48 L 38 56 L 42 40 L 30 28 L 46 28 Z" fill="currentColor"/>
            </svg>
        </div>
        
        <!-- Gradient Orbs for Modern Depth Effect -->
        <div class="absolute top-1/3 left-0 w-[500px] h-[500px] bg-islamic-green-500/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-0 w-[600px] h-[600px] bg-islamic-teal-500/5 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] bg-islamic-gold-500/5 rounded-full blur-3xl"></div>
        
        <!-- Modern Border Accents -->
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-islamic-green-400/30 to-transparent"></div>
        <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-islamic-teal-400/30 to-transparent"></div>
        
        <!-- Content Container -->
        <div class="relative z-10 max-w-7xl mx-auto">
            <div class="text-center mb-16 fade-in-on-scroll">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    <?php echo e(__('messages.courses_title')); ?>

                </h2>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    <?php echo e(__('messages.courses_subtitle')); ?>

                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Course 1: Quran -->
                <div class="fade-in-on-scroll bg-gradient-to-br from-gray-800 to-gray-700 rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-600 flex flex-col">
                    <div class="h-48 bg-gradient-to-br from-islamic-green-500 to-islamic-green-700 flex items-center justify-center">
                        <img src="<?php echo e(asset('images/quran_memo.png')); ?>" alt="Quran Course" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <h3 class="text-2xl font-bold text-white mb-4">
                            <?php echo e(__('messages.course_quran')); ?>

                        </h3>
                        <p class="text-gray-300 mb-6 flex-grow min-h-[4.5rem]">
                            <?php echo e(__('messages.course_quran_desc')); ?>

                        </p>
                        <a href="https://wa.me/1234567890?text=Hello%2C%20I%20would%20like%20to%20enroll%20in%20ElmCorner" target="_blank" rel="noopener noreferrer" class="btn-primary w-full text-center mt-auto">
                            <?php echo e(__('messages.cta_enroll')); ?>

                        </a>
                    </div>
                </div>

                <!-- Course 2: Islamic Studies -->
                <div class="fade-in-on-scroll bg-gradient-to-br from-gray-800 to-gray-700 rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-600 flex flex-col">
                    <div class="h-48 bg-gradient-to-br from-islamic-teal-500 to-islamic-teal-700 flex items-center justify-center">
                        <img src="<?php echo e(asset('images/2.png')); ?>" alt="Islamic Studies Course" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <h3 class="text-2xl font-bold text-white mb-4">
                            <?php echo e(__('messages.course_islamic')); ?>

                        </h3>
                        <p class="text-gray-300 mb-6 flex-grow min-h-[4.5rem]">
                            <?php echo e(__('messages.course_islamic_desc')); ?>

                        </p>
                        <a href="https://wa.me/1234567890?text=Hello%2C%20I%20would%20like%20to%20enroll%20in%20ElmCorner" target="_blank" rel="noopener noreferrer" class="btn-primary w-full text-center mt-auto">
                            <?php echo e(__('messages.cta_enroll')); ?>

                        </a>
                    </div>
                </div>

                <!-- Course 3: Arabic -->
                <div class="fade-in-on-scroll bg-gradient-to-br from-gray-800 to-gray-700 rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-600 flex flex-col">
                    <div class="h-48 bg-gradient-to-br from-islamic-gold-500 to-islamic-gold-700 flex items-center justify-center">
                        <img src="<?php echo e(asset('images/3.png')); ?>" alt="Arabic Language Course" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <h3 class="text-2xl font-bold text-white mb-4">
                            <?php echo e(__('messages.course_arabic')); ?>

                        </h3>
                        <p class="text-gray-300 mb-6 flex-grow min-h-[4.5rem]">
                            <?php echo e(__('messages.course_arabic_desc')); ?>

                        </p>
                        <a href="https://wa.me/1234567890?text=Hello%2C%20I%20would%20like%20to%20enroll%20in%20ElmCorner" target="_blank" rel="noopener noreferrer" class="btn-primary w-full text-center mt-auto">
                            <?php echo e(__('messages.cta_enroll')); ?>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="section-padding bg-gradient-to-br from-gray-800 via-gray-900 to-gray-800 text-white relative overflow-hidden">
        <!-- Decorative Vector - Top Right -->
        <div class="absolute top-16 right-16 w-24 h-24 md:w-32 md:h-32 lg:w-40 lg:h-40 z-30 opacity-10 pointer-events-none">
            <img src="<?php echo e(asset('images/decorative1.png')); ?>" alt="Decorative" class="w-full h-full object-contain">
        </div>
        
        <!-- Decorative Background Elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-10 w-64 h-64 bg-islamic-green-500/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-64 h-64 bg-islamic-teal-500/20 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="text-center mb-16 fade-in-on-scroll">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    <?php echo e(__('messages.testimonials_title')); ?>

                </h2>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    <?php echo e(__('messages.testimonials_subtitle')); ?>

                </p>
            </div>

            <div class="max-w-5xl mx-auto" 
                 x-data="{
                     current: 0,
                     isRTL: document.documentElement.dir === 'rtl',
                     testimonials: [
                         {
                             name: '<?php echo e(__('messages.testimonial_1_name')); ?>',
                             location: '<?php echo e(__('messages.testimonial_1_location')); ?>',
                             image: '<?php echo e(asset('images/muslim.png')); ?>',
                             quote: '<?php echo e(__('messages.testimonial_1_quote')); ?>'
                         },
                         {
                             name: '<?php echo e(__('messages.testimonial_2_name')); ?>',
                             location: '<?php echo e(__('messages.testimonial_2_location')); ?>',
                             image: '<?php echo e(asset('images/woman.png')); ?>',
                             quote: '<?php echo e(__('messages.testimonial_2_quote')); ?>'
                         },
                         {
                             name: '<?php echo e(__('messages.testimonial_3_name')); ?>',
                             location: '<?php echo e(__('messages.testimonial_3_location')); ?>',
                             image: '<?php echo e(asset('images/hijab.png')); ?>',
                             quote: '<?php echo e(__('messages.testimonial_3_quote')); ?>'
                         }
                     ],
                     autoplayInterval: null,
                     init() {
                         this.startAutoplay();
                     },
                     startAutoplay() {
                         this.autoplayInterval = setInterval(() => {
                             this.next();
                         }, 5000);
                     },
                     stopAutoplay() {
                         if (this.autoplayInterval) {
                             clearInterval(this.autoplayInterval);
                         }
                     },
                     next() {
                         this.current = (this.current + 1) % this.testimonials.length;
                     },
                     prev() {
                         this.current = (this.current - 1 + this.testimonials.length) % this.testimonials.length;
                     },
                     goTo(index) {
                         this.current = index;
                     },
                     getTransform() {
                         const direction = this.isRTL ? '' : '-';
                         return `translateX(${direction}${this.current * 100}%)`;
                     }
                 }"
                 @mouseenter="stopAutoplay()"
                 @mouseleave="startAutoplay()">
                
                <!-- Carousel Container -->
                <div class="relative">
                    <!-- Navigation Arrows -->
                    <button 
                        @click="prev()"
                        class="absolute left-0 rtl:left-auto rtl:right-0 top-1/2 -translate-y-1/2 -translate-x-4 md:-translate-x-12 rtl:translate-x-4 rtl:md:translate-x-12 z-20 bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-full p-3 md:p-4 transition-all duration-300 hover:scale-110 border border-white/20 shadow-lg">
                        <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    
                    <button 
                        @click="next()"
                        class="absolute right-0 rtl:right-auto rtl:left-0 top-1/2 -translate-y-1/2 translate-x-4 md:translate-x-12 rtl:-translate-x-4 rtl:md:-translate-x-12 z-20 bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-full p-3 md:p-4 transition-all duration-300 hover:scale-110 border border-white/20 shadow-lg">
                        <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>

                    <!-- Slides Container -->
                    <div class="relative overflow-hidden rounded-3xl">
                        <div class="flex transition-transform duration-500 ease-in-out" 
                             :style="`transform: ${getTransform()}`">
                            
                            <template x-for="(testimonial, index) in testimonials" :key="index">
                                <div class="min-w-full px-4 flex-shrink-0" style="display: block; width: 100%;">
                                    <div class="bg-gradient-to-br from-gray-700/95 to-gray-800/95 backdrop-blur-md p-8 md:p-12 rounded-3xl shadow-2xl border border-gray-600/50 hover:border-islamic-green-500/50 transition-all duration-300 w-full relative overflow-visible">
                                        <!-- Quote Icon -->
                                        <div class="absolute top-6 left-6 rtl:left-auto rtl:right-6 opacity-20">
                                            <svg class="w-16 h-16 text-islamic-green-400" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.996 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.984zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.432.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                            </svg>
                                        </div>

                                        <div class="flex flex-col md:flex-row items-center md:items-start gap-6 md:gap-8 relative z-10 rtl:md:flex-row-reverse">
                                            <!-- Student Image -->
                                            <div class="flex-shrink-0">
                                                <div class="relative">
                                                    <div class="absolute inset-0 bg-gradient-to-br from-islamic-green-500/50 to-islamic-teal-500/50 rounded-full blur-xl"></div>
                                                    <img 
                                                        :src="testimonial.image" 
                                                        :alt="testimonial.name"
                                                        class="relative w-24 h-24 md:w-32 md:h-32 rounded-full object-cover border-4 border-white/20 shadow-xl ring-4 ring-islamic-green-500/30">
                                                </div>
                                            </div>

                                            <!-- Testimonial Content -->
                                            <div class="flex-1 w-full text-center md:text-left rtl:md:text-right min-w-0 overflow-visible">
                                                <div class="mb-4">
                                                    <h4 class="text-2xl md:text-3xl font-bold text-white mb-2 break-words" x-text="testimonial.name"></h4>
                                                    <p class="text-islamic-green-400 font-medium break-words" x-text="testimonial.location"></p>
                                                </div>
                                                <p class="text-lg md:text-xl text-gray-200 leading-relaxed italic mb-6 break-words overflow-visible whitespace-normal" x-text="testimonial.quote"></p>
                                                
                                                <!-- Star Rating -->
                                                <div class="flex justify-center md:justify-start rtl:md:justify-end gap-1 flex-wrap overflow-visible">
                                                    <template x-for="i in 5" :key="i">
                                                        <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                        </svg>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Dots Indicator -->
                    <div class="flex justify-center mt-8 gap-3">
                        <template x-for="(testimonial, index) in testimonials" :key="index">
                            <button 
                                @click="goTo(index)"
                                :class="current === index ? 'bg-islamic-green-500 w-10 scale-110' : 'bg-gray-500/50 w-3 hover:bg-gray-400'"
                                class="h-3 rounded-full transition-all duration-300"
                                :aria-label="'Go to testimonial ' + (index + 1)">
                            </button>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enrollment Form Section -->
    <section id="enroll" class="section-padding relative overflow-hidden bg-gradient-to-br from-gray-900 via-islamic-dark-dark to-gray-900 text-white">
        <!-- Decorative Vector - Top Left -->
        <div class="absolute top-12 left-12 w-24 h-24 md:w-32 md:h-32 lg:w-40 lg:h-40 z-30 opacity-10 pointer-events-none">
            <img src="<?php echo e(asset('images/decorative1.png')); ?>" alt="Decorative" class="w-full h-full object-contain">
        </div>
        
        <div class="relative z-10 max-w-4xl mx-auto">
            <div class="text-center mb-12 fade-in-on-scroll">
                <h2 class="text-4xl md:text-5xl font-bold mb-4 text-shadow-lg">
                    <?php echo e(__('messages.enroll_title')); ?>

                </h2>
                <p class="text-xl text-gray-200 max-w-2xl mx-auto text-shadow">
                    <?php echo e(__('messages.enroll_subtitle')); ?>

                </p>
            </div>

            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 md:p-12 shadow-2xl" 
                 x-data="{
                     formData: {
                         name: '',
                         email: '',
                         phone: '',
                         age: '',
                         country: '',
                         course_interest: '',
                         preferred_schedule: '',
                         experience_level: ''
                     },
                     errors: {},
                     loading: false,
                     success: false,
                     message: '',
                     
                     async submitForm() {
                         this.loading = true;
                         this.errors = {};
                         this.success = false;
                         
                         try {
                             const response = await fetch('<?php echo e(route('enroll', ['locale' => app()->getLocale()])); ?>', {
                                 method: 'POST',
                                 headers: {
                                     'Content-Type': 'application/json',
                                     'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                                 },
                                 body: JSON.stringify(this.formData)
                             });
                             
                             const data = await response.json();
                             
                             if (data.success) {
                                 this.success = true;
                                 this.message = data.message;
                                 this.formData = {
                                     name: '',
                                     email: '',
                                     phone: '',
                                     age: '',
                                     country: '',
                                     course_interest: '',
                                     preferred_schedule: '',
                                     experience_level: ''
                                 };
                             } else {
                                 this.errors = data.errors || {};
                             }
                         } catch (error) {
                             this.message = 'An error occurred. Please try again.';
                         } finally {
                             this.loading = false;
                         }
                     }
                 }">
                
                <div x-show="success" x-transition class="mb-6 p-4 bg-green-500 rounded-lg">
                    <p class="text-white font-semibold" x-text="message"></p>
                </div>

                <form @submit.prevent="submitForm()" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Name -->
                        <div>
                            <label class="block text-sm font-semibold mb-2"><?php echo e(__('messages.form_name')); ?></label>
                            <input type="text" x-model="formData.name" required
                                   class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-islamic-gold-500 focus:border-transparent"
                                   :class="errors.name ? 'border-red-500' : ''">
                            <p x-show="errors.name" x-text="errors.name[0]" class="text-red-300 text-sm mt-1"></p>
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="block text-sm font-semibold mb-2"><?php echo e(__('messages.form_email')); ?></label>
                            <input type="email" x-model="formData.email" required
                                   class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-islamic-gold-500 focus:border-transparent"
                                   :class="errors.email ? 'border-red-500' : ''">
                            <p x-show="errors.email" x-text="errors.email[0]" class="text-red-300 text-sm mt-1"></p>
                        </div>

                        <!-- Phone -->
                        <div>
                            <label class="block text-sm font-semibold mb-2"><?php echo e(__('messages.form_phone')); ?></label>
                            <input type="tel" x-model="formData.phone" required
                                   class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-islamic-gold-500 focus:border-transparent"
                                   :class="errors.phone ? 'border-red-500' : ''">
                            <p x-show="errors.phone" x-text="errors.phone[0]" class="text-red-300 text-sm mt-1"></p>
                        </div>

                        <!-- Age -->
                        <div>
                            <label class="block text-sm font-semibold mb-2"><?php echo e(__('messages.form_age')); ?></label>
                            <input type="number" x-model="formData.age" required min="5" max="100"
                                   class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-islamic-gold-500 focus:border-transparent"
                                   :class="errors.age ? 'border-red-500' : ''">
                            <p x-show="errors.age" x-text="errors.age[0]" class="text-red-300 text-sm mt-1"></p>
                        </div>

                        <!-- Country -->
                        <div>
                            <label class="block text-sm font-semibold mb-2"><?php echo e(__('messages.form_country')); ?></label>
                            <input type="text" x-model="formData.country" required
                                   class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-islamic-gold-500 focus:border-transparent"
                                   :class="errors.country ? 'border-red-500' : ''">
                            <p x-show="errors.country" x-text="errors.country[0]" class="text-red-300 text-sm mt-1"></p>
                        </div>

                        <!-- Course Interest -->
                        <div>
                            <label class="block text-sm font-semibold mb-2"><?php echo e(__('messages.form_course')); ?></label>
                            <select x-model="formData.course_interest" required
                                    class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-white focus:outline-none focus:ring-2 focus:ring-islamic-gold-500 focus:border-transparent">
                                <option value="" class="text-gray-900">Select Course</option>
                                <option value="Quran" class="text-gray-900">Quran</option>
                                <option value="Islamic Studies" class="text-gray-900">Islamic Studies</option>
                                <option value="Arabic Language" class="text-gray-900">Arabic Language</option>
                            </select>
                            <p x-show="errors.course_interest" x-text="errors.course_interest[0]" class="text-red-300 text-sm mt-1"></p>
                        </div>

                        <!-- Preferred Schedule -->
                        <div>
                            <label class="block text-sm font-semibold mb-2"><?php echo e(__('messages.form_schedule')); ?></label>
                            <select x-model="formData.preferred_schedule" required
                                    class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-white focus:outline-none focus:ring-2 focus:ring-islamic-gold-500 focus:border-transparent">
                                <option value="" class="text-gray-900">Select Schedule</option>
                                <option value="Morning" class="text-gray-900">Morning</option>
                                <option value="Afternoon" class="text-gray-900">Afternoon</option>
                                <option value="Evening" class="text-gray-900">Evening</option>
                                <option value="Flexible" class="text-gray-900">Flexible</option>
                            </select>
                            <p x-show="errors.preferred_schedule" x-text="errors.preferred_schedule[0]" class="text-red-300 text-sm mt-1"></p>
                        </div>

                        <!-- Experience Level -->
                        <div>
                            <label class="block text-sm font-semibold mb-2"><?php echo e(__('messages.form_experience')); ?></label>
                            <select x-model="formData.experience_level" required
                                    class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-white focus:outline-none focus:ring-2 focus:ring-islamic-gold-500 focus:border-transparent">
                                <option value="" class="text-gray-900">Select Level</option>
                                <option value="Beginner" class="text-gray-900">Beginner</option>
                                <option value="Intermediate" class="text-gray-900">Intermediate</option>
                                <option value="Advanced" class="text-gray-900">Advanced</option>
                            </select>
                            <p x-show="errors.experience_level" x-text="errors.experience_level[0]" class="text-red-300 text-sm mt-1"></p>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" :disabled="loading"
                                class="btn-secondary text-lg px-12 py-4 disabled:opacity-50 disabled:cursor-not-allowed">
                            <span x-show="!loading"><?php echo e(__('messages.form_submit')); ?></span>
                            <span x-show="loading"><?php echo e(__('messages.form_submitting')); ?></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ahmedomar/Documents/ElmCorner/website/resources/views/pages/home.blade.php ENDPATH**/ ?>