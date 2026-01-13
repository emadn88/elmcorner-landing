<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of all published blog posts.
     */
    public function index(Request $request)
    {
        $posts = Post::published()
            ->latest()
            ->paginate(9);

        // SEO Data
        $locale = app()->getLocale();
        $seoData = [
            'title' => $locale === 'ar' ? 'المدونة - مقالات إسلامية' : 'Blog - Islamic Articles & Resources',
            'description' => $locale === 'ar'
                ? 'اقرأ أحدث المقالات الإسلامية والموارد التعليمية حول القرآن الكريم والدراسات الإسلامية واللغة العربية.'
                : 'Read the latest Islamic articles and educational resources about Quran, Islamic studies, and Arabic language.',
            'keywords' => $locale === 'ar'
                ? 'مقالات إسلامية, مدونة إسلامية, موارد تعليمية, قرآن, دراسات إسلامية'
                : 'Islamic articles, Islamic blog, educational resources, Quran, Islamic studies',
            'url' => url()->current(),
            'type' => 'website',
        ];

        return view('pages.blog.index', compact('posts', 'seoData'));
    }

    /**
     * Display the specified blog post.
     */
    public function show(Request $request, $locale, $slug)
    {
        // Ensure locale is valid
        if (!in_array($locale, ['en', 'ar'])) {
            $locale = 'en'; // Default to English
        }
        
        // Set locale
        app()->setLocale($locale);
        
        // Find the post - try both slug fields to handle cases where locale might not match
        // Use where with closure to properly group OR conditions
        $post = Post::published()
            ->where(function($query) use ($slug) {
                $query->where('slug_en', $slug)
                      ->orWhere('slug_ar', $slug);
            })
            ->first();
        
        // If not found with published scope, try without it (for debugging)
        if (!$post) {
            $post = Post::where(function($query) use ($slug) {
                $query->where('slug_en', $slug)
                      ->orWhere('slug_ar', $slug);
            })->first();
            
            if (!$post) {
                // Check if any posts exist
                $totalPosts = Post::count();
                abort(404, "Post with slug '{$slug}' not found. Total posts in database: {$totalPosts}");
            }
            
            // If post exists but not published, show 404
            if (!$post->is_published) {
                abort(404, "Post is not published.");
            }
        }

        // Increment views count
        $post->incrementViews();

        // Get related posts (excluding current post)
        $relatedPosts = Post::published()
            ->where('id', '!=', $post->id)
            ->latest()
            ->limit(3)
            ->get();

        // SEO Data
        $locale = app()->getLocale();
        $featuredImage = $post->featured_image ? asset($post->featured_image) : asset('images/logo.png');
        
        $seoData = [
            'title' => $post->meta_title ?: $post->title,
            'description' => $post->meta_description ?: $post->excerpt,
            'keywords' => $post->meta_keywords ?: 'Islamic education, Quran, Arabic, Islamic studies',
            'image' => $featuredImage,
            'url' => url()->current(),
            'type' => 'article',
            'article' => [
                'title' => $post->title,
                'description' => $post->excerpt,
                'image' => $featuredImage,
                'published_at' => $post->published_at ? $post->published_at->toIso8601String() : $post->created_at->toIso8601String(),
                'updated_at' => $post->updated_at->toIso8601String(),
            ],
        ];

        return view('pages.blog.show', compact('post', 'relatedPosts', 'seoData'));
    }

    /**
     * Get the featured post for homepage.
     */
    public static function getFeaturedPost()
    {
        return Post::published()
            ->featured()
            ->latest()
            ->first();
    }
}
