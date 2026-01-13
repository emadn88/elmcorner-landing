<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_ar',
        'slug_en',
        'slug_ar',
        'excerpt_en',
        'excerpt_ar',
        'content_en',
        'content_ar',
        'featured_image',
        'author_name',
        'meta_title_en',
        'meta_title_ar',
        'meta_description_en',
        'meta_description_ar',
        'meta_keywords_en',
        'meta_keywords_ar',
        'is_featured',
        'is_published',
        'published_at',
        'views_count',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
        'views_count' => 'integer',
    ];

    /**
     * Scope a query to only include published posts.
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
            ->where(function ($q) {
                $q->whereNull('published_at')
                  ->orWhere('published_at', '<=', now());
            });
    }

    /**
     * Scope a query to only include featured posts.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope a query to order by latest first.
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('published_at', 'desc')
            ->orderBy('created_at', 'desc');
    }

    /**
     * Get the formatted published date.
     */
    public function getFormattedPublishedDateAttribute()
    {
        if (!$this->published_at) {
            return $this->created_at->format('F d, Y');
        }
        return $this->published_at->format('F d, Y');
    }

    /**
     * Get localized title based on current locale.
     */
    public function getTitleAttribute()
    {
        $locale = app()->getLocale();
        return $locale === 'ar' ? $this->title_ar : $this->title_en;
    }

    /**
     * Get localized slug based on current locale.
     */
    public function getSlugAttribute()
    {
        $locale = app()->getLocale();
        return $locale === 'ar' ? $this->slug_ar : $this->slug_en;
    }

    /**
     * Get localized excerpt based on current locale.
     */
    public function getExcerptAttribute()
    {
        $locale = app()->getLocale();
        return $locale === 'ar' ? $this->excerpt_ar : $this->excerpt_en;
    }

    /**
     * Get localized content based on current locale.
     */
    public function getContentAttribute()
    {
        $locale = app()->getLocale();
        return $locale === 'ar' ? $this->content_ar : $this->content_en;
    }

    /**
     * Get localized meta title based on current locale.
     */
    public function getMetaTitleAttribute()
    {
        $locale = app()->getLocale();
        $metaTitle = $locale === 'ar' ? $this->meta_title_ar : $this->meta_title_en;
        return $metaTitle ?: $this->title;
    }

    /**
     * Get localized meta description based on current locale.
     */
    public function getMetaDescriptionAttribute()
    {
        $locale = app()->getLocale();
        $metaDesc = $locale === 'ar' ? $this->meta_description_ar : $this->meta_description_en;
        return $metaDesc ?: $this->excerpt;
    }

    /**
     * Get localized meta keywords based on current locale.
     */
    public function getMetaKeywordsAttribute()
    {
        $locale = app()->getLocale();
        return $locale === 'ar' ? $this->meta_keywords_ar : $this->meta_keywords_en;
    }

    /**
     * Increment views count.
     */
    public function incrementViews()
    {
        $this->increment('views_count');
    }
}
