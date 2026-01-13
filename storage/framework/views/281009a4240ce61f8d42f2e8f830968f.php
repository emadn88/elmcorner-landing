<?php $__env->startPush('head'); ?>
    <style>
        .blog-content {
            @apply text-gray-200 leading-relaxed;
        }
        .blog-content p {
            @apply mb-6 text-lg;
        }
        .blog-content h2 {
            @apply text-3xl font-bold text-white mt-12 mb-6 pt-6 border-t border-gray-700/50;
        }
        .blog-content h3 {
            @apply text-2xl font-bold text-white mt-8 mb-4;
        }
        .blog-content ul, .blog-content ol {
            @apply mb-6 ml-6 space-y-3;
        }
        .blog-content li {
            @apply text-lg;
        }
        .blog-content ul li {
            @apply list-disc;
        }
        .blog-content ol li {
            @apply list-decimal;
        }
        .blog-content strong {
            @apply font-bold text-white;
        }
        .blog-content em {
            @apply italic text-gray-300;
        }
        .blog-content a {
            @apply text-islamic-green-400 hover:text-islamic-green-300 underline;
        }
        .blog-content blockquote {
            @apply border-l-4 border-islamic-green-500 pl-6 py-4 my-8 bg-gray-800/50 rounded-r-lg italic;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Blog Post Detail Section -->
    <article class="relative overflow-hidden text-white min-h-screen">
        <!-- Hero Section with Featured Image -->
        <?php if($post->featured_image): ?>
        <div class="relative h-[60vh] md:h-[70vh] overflow-hidden">
            <!-- Featured Image with Overlay -->
            <div class="absolute inset-0">
                <img src="<?php echo e(asset($post->featured_image)); ?>" 
                     alt="<?php echo e($post->title); ?>" 
                     class="w-full h-full object-cover"
                     loading="eager"
                     decoding="sync"
                     fetchpriority="high">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/80 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-gray-900/60 via-transparent to-gray-900/60"></div>
            </div>
            
            <!-- Decorative Pattern Overlay -->
            <div class="absolute inset-0 opacity-10">
                <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120">
                    <defs>
                        <pattern id="hero-pattern" x="0" y="0" width="120" height="120" patternUnits="userSpaceOnUse">
                            <polygon points="60,5 70,25 90,25 75,40 85,60 60,50 35,60 45,40 30,25 50,25" fill="none" stroke="currentColor" stroke-width="0.4" opacity="0.3"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#hero-pattern)" class="text-white"/>
                </svg>
            </div>
            
            <!-- Content Overlay -->
            <div class="relative z-10 h-full flex flex-col justify-end">
                <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pb-12 md:pb-16">
                    <!-- Category Badge -->
                    <div class="mb-4 fade-in-on-scroll">
                        <span class="inline-flex items-center gap-2 px-4 py-2 bg-islamic-green-500/20 backdrop-blur-sm rounded-full border border-islamic-green-400/30 text-islamic-green-300 text-sm font-semibold">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                            </svg>
                            <?php echo e(app()->getLocale() === 'ar' ? 'مقال إسلامي' : 'Islamic Article'); ?>

                        </span>
                    </div>
                    
                    <!-- Title -->
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight fade-in-on-scroll drop-shadow-2xl">
                        <?php echo e($post->title); ?>

                    </h1>
                    
                    <!-- Excerpt -->
                    <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl fade-in-on-scroll drop-shadow-lg">
                        <?php echo e($post->excerpt); ?>

                    </p>
                    
                    <!-- Meta Information -->
                    <div class="flex flex-wrap items-center gap-6 fade-in-on-scroll">
                        <!-- Author -->
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-islamic-green-500/30 to-islamic-teal-500/30 backdrop-blur-sm border-2 border-white/20 flex items-center justify-center ring-2 ring-islamic-green-500/30">
                                <svg class="w-6 h-6 text-islamic-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-400 uppercase tracking-wider"><?php echo e(app()->getLocale() === 'ar' ? 'الكاتب' : 'Author'); ?></div>
                                <div class="text-white font-semibold"><?php echo e($post->author_name); ?></div>
                            </div>
                        </div>
                        
                        <!-- Date -->
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-islamic-teal-500/30 to-islamic-green-500/30 backdrop-blur-sm border-2 border-white/20 flex items-center justify-center ring-2 ring-islamic-teal-500/30">
                                <svg class="w-6 h-6 text-islamic-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-400 uppercase tracking-wider"><?php echo e(app()->getLocale() === 'ar' ? 'التاريخ' : 'Published'); ?></div>
                                <time datetime="<?php echo e($post->published_at ? $post->published_at->toIso8601String() : $post->created_at->toIso8601String()); ?>" class="text-white font-semibold">
                                    <?php echo e($post->formatted_published_date); ?>

                                </time>
                            </div>
                        </div>
                        
                        <!-- Views -->
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-islamic-gold-500/30 to-islamic-green-500/30 backdrop-blur-sm border-2 border-white/20 flex items-center justify-center ring-2 ring-islamic-gold-500/30">
                                <svg class="w-6 h-6 text-islamic-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-400 uppercase tracking-wider"><?php echo e(app()->getLocale() === 'ar' ? 'المشاهدات' : 'Views'); ?></div>
                                <div class="text-white font-semibold"><?php echo e(number_format($post->views_count)); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <!-- Hero Section without Image -->
        <div class="relative pt-32 pb-16 bg-gradient-to-br from-gray-900 via-islamic-green-900/20 to-gray-900">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                    <?php echo e($post->title); ?>

                </h1>
                <p class="text-xl md:text-2xl text-gray-300 mb-8">
                    <?php echo e($post->excerpt); ?>

                </p>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Main Content Area -->
        <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
            <!-- Decorative Background Elements -->
            <div class="absolute inset-0 opacity-[0.03] z-0">
                <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120">
                    <defs>
                        <pattern id="content-pattern" x="0" y="0" width="120" height="120" patternUnits="userSpaceOnUse">
                            <polygon points="60,5 70,25 90,25 75,40 85,60 60,50 35,60 45,40 30,25 50,25" fill="none" stroke="currentColor" stroke-width="0.4" opacity="0.2"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#content-pattern)" class="text-islamic-green-300"/>
                </svg>
            </div>
            
            <!-- Gradient Orbs -->
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-islamic-green-500/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-islamic-teal-500/5 rounded-full blur-3xl"></div>
            
            <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Breadcrumb Navigation -->
                <nav class="py-8 fade-in-on-scroll" aria-label="Breadcrumb">
                    <ol class="flex items-center gap-2 text-sm">
                        <li>
                            <a href="<?php echo e(route('home', ['locale' => app()->getLocale()])); ?>" class="text-gray-400 hover:text-islamic-green-400 transition-colors">
                                <?php echo e(app()->getLocale() === 'ar' ? 'الرئيسية' : 'Home'); ?>

                            </a>
                        </li>
                        <li class="text-gray-600">/</li>
                        <li>
                            <a href="<?php echo e(route('blog.index', ['locale' => app()->getLocale()])); ?>" class="text-gray-400 hover:text-islamic-green-400 transition-colors">
                                <?php echo e(app()->getLocale() === 'ar' ? 'المدونة' : 'Blog'); ?>

                            </a>
                        </li>
                        <li class="text-gray-600">/</li>
                        <li class="text-gray-300 truncate max-w-xs"><?php echo e(\Illuminate\Support\Str::limit($post->title, 40)); ?></li>
                    </ol>
                </nav>
                
                <!-- Post Content -->
                <div class="bg-gradient-to-br from-gray-800/90 to-gray-900/90 backdrop-blur-sm rounded-3xl p-8 md:p-12 lg:p-16 border border-gray-700/50 shadow-2xl mb-12 fade-in-on-scroll">
                    <div class="blog-content">
                        <?php echo nl2br(e($post->content)); ?>

                    </div>
                </div>
                
                <!-- Share Section - Modern Design -->
                <div class="mb-12 fade-in-on-scroll">
                    <div class="bg-gradient-to-br from-gray-800/80 to-gray-700/80 backdrop-blur-sm rounded-2xl p-8 border border-gray-600/50 shadow-xl">
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <h3 class="text-2xl font-bold text-white mb-2">
                                    <?php echo e(app()->getLocale() === 'ar' ? 'شارك هذه المقالة' : 'Share this article'); ?>

                                </h3>
                                <p class="text-gray-400 text-sm">
                                    <?php echo e(app()->getLocale() === 'ar' ? 'ساعد الآخرين على اكتشاف هذا المحتوى' : 'Help others discover this content'); ?>

                                </p>
                            </div>
                            <div class="hidden md:block w-16 h-16 rounded-full bg-gradient-to-br from-islamic-green-500/20 to-islamic-teal-500/20 flex items-center justify-center">
                                <svg class="w-8 h-8 text-islamic-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-4">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode(url()->current())); ?>" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="group flex-1 min-w-[140px] flex items-center justify-center gap-3 px-6 py-4 bg-blue-600 hover:bg-blue-700 rounded-xl text-white font-semibold transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                                <span>Facebook</span>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=<?php echo e(urlencode(url()->current())); ?>&text=<?php echo e(urlencode($post->title)); ?>" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="group flex-1 min-w-[140px] flex items-center justify-center gap-3 px-6 py-4 bg-sky-500 hover:bg-sky-600 rounded-xl text-white font-semibold transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                                <span>Twitter</span>
                            </a>
                            <a href="https://wa.me/?text=<?php echo e(urlencode($post->title . ' ' . url()->current())); ?>" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="group flex-1 min-w-[140px] flex items-center justify-center gap-3 px-6 py-4 bg-green-600 hover:bg-green-700 rounded-xl text-white font-semibold transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                </svg>
                                <span>WhatsApp</span>
                            </a>
                            <button onclick="navigator.clipboard.writeText('<?php echo e(url()->current()); ?>')" 
                                    class="group flex-1 min-w-[140px] flex items-center justify-center gap-3 px-6 py-4 bg-gray-700 hover:bg-gray-600 rounded-xl text-white font-semibold transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                                <span><?php echo e(app()->getLocale() === 'ar' ? 'نسخ الرابط' : 'Copy Link'); ?></span>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Author Card -->
                <div class="mb-12 fade-in-on-scroll">
                    <div class="bg-gradient-to-br from-gray-800/80 to-gray-700/80 backdrop-blur-sm rounded-2xl p-8 border border-gray-600/50 shadow-xl">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0">
                                <div class="w-20 h-20 rounded-full bg-gradient-to-br from-islamic-green-500/30 to-islamic-teal-500/30 backdrop-blur-sm border-2 border-islamic-green-400/30 flex items-center justify-center ring-4 ring-islamic-green-500/20">
                                    <svg class="w-10 h-10 text-islamic-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-bold text-white mb-2"><?php echo e($post->author_name); ?></h4>
                                <p class="text-gray-400 mb-4">
                                    <?php echo e(app()->getLocale() === 'ar' ? 'كاتب ومؤلف في التعليم الإسلامي' : 'Writer and author in Islamic education'); ?>

                                </p>
                                <div class="flex items-center gap-4 text-sm text-gray-500">
                                    <span><?php echo e(app()->getLocale() === 'ar' ? 'مقالات منشورة:' : 'Published articles:'); ?> 5+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Related Posts -->
                <?php if($relatedPosts->count() > 0): ?>
                <div class="mb-16 fade-in-on-scroll">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">
                                <?php echo e(app()->getLocale() === 'ar' ? 'مقالات ذات صلة' : 'Related Articles'); ?>

                            </h2>
                            <p class="text-gray-400">
                                <?php echo e(app()->getLocale() === 'ar' ? 'اكتشف المزيد من المحتوى المشابه' : 'Discover more similar content'); ?>

                            </p>
                        </div>
                        <a href="<?php echo e(route('blog.index', ['locale' => app()->getLocale()])); ?>" 
                           class="hidden md:flex items-center gap-2 text-islamic-green-400 hover:text-islamic-green-300 font-semibold transition-colors">
                            <span><?php echo e(app()->getLocale() === 'ar' ? 'عرض الكل' : 'View All'); ?></span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <?php $__currentLoopData = $relatedPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <article class="group bg-gradient-to-br from-gray-800/90 to-gray-700/90 backdrop-blur-sm rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-600/50">
                            <?php if($relatedPost->featured_image): ?>
                            <div class="relative h-48 overflow-hidden">
                                <img src="<?php echo e(asset($relatedPost->featured_image)); ?>" 
                                     alt="<?php echo e($relatedPost->title); ?>" 
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-transparent to-transparent"></div>
                                
                                <!-- Decorative Corner -->
                                <div class="absolute top-3 right-3 w-8 h-8 opacity-40">
                                    <svg viewBox="0 0 100 100" class="w-full h-full text-islamic-green-400">
                                        <polygon points="50,10 60,40 90,40 65,60 75,90 50,75 25,90 35,60 10,40 40,40" fill="currentColor"/>
                                    </svg>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="p-6">
                                <div class="flex items-center gap-2 mb-3 text-xs text-gray-500">
                                    <time><?php echo e($relatedPost->formatted_published_date); ?></time>
                                    <span>•</span>
                                    <span><?php echo e($relatedPost->views_count); ?> <?php echo e(app()->getLocale() === 'ar' ? 'مشاهدة' : 'views'); ?></span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-3 group-hover:text-islamic-green-400 transition-colors line-clamp-2 leading-tight">
                                    <?php echo e($relatedPost->title); ?>

                                </h3>
                                <p class="text-gray-400 text-sm mb-4 line-clamp-2">
                                    <?php echo e($relatedPost->excerpt); ?>

                                </p>
                                <a href="<?php echo e(route('blog.show', ['locale' => app()->getLocale(), 'slug' => app()->getLocale() === 'ar' ? $relatedPost->slug_ar : $relatedPost->slug_en])); ?>" 
                                   class="inline-flex items-center gap-2 text-islamic-green-400 hover:text-islamic-green-300 font-semibold text-sm group-hover:gap-3 transition-all">
                                    <span><?php echo e(app()->getLocale() === 'ar' ? 'اقرأ المزيد' : 'Read More'); ?></span>
                                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>
                
                <!-- Back to Blog Button -->
                <div class="text-center pb-16 fade-in-on-scroll">
                    <a href="<?php echo e(route('blog.index', ['locale' => app()->getLocale()])); ?>" 
                       class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-islamic-green-600 to-islamic-teal-600 hover:from-islamic-green-700 hover:to-islamic-teal-700 text-white font-semibold rounded-xl transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        <span><?php echo e(app()->getLocale() === 'ar' ? 'العودة إلى المدونة' : 'Back to Blog'); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </article>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ahmedomar/Documents/ElmCorner/website/resources/views/pages/blog/show.blade.php ENDPATH**/ ?>