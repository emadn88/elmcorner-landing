<?php

namespace App\Services;

class SeoService
{
    protected $data = [];

    public function __construct()
    {
        $this->data = [
            'title' => config('app.name', 'ElmCorner') . ' - Online Islamic Academy',
            'description' => 'Learn Quran, Islamic Studies, and Arabic Language online. Quality education for all ages, anywhere in the world.',
            'keywords' => 'Islamic education, Quran online, Arabic language, Islamic studies, online academy, Quran memorization, Tajweed, Fiqh',
            'image' => asset('images/logo.png'),
            'url' => url()->current(),
            'type' => 'website',
            'locale' => app()->getLocale(),
            'site_name' => config('app.name', 'ElmCorner'),
        ];
    }

    public function setTitle($title)
    {
        $this->data['title'] = $title . ' - ' . config('app.name', 'ElmCorner');
        return $this;
    }

    public function setDescription($description)
    {
        $this->data['description'] = $description;
        return $this;
    }

    public function setKeywords($keywords)
    {
        $this->data['keywords'] = is_array($keywords) ? implode(', ', $keywords) : $keywords;
        return $this;
    }

    public function setImage($image)
    {
        $this->data['image'] = $image;
        return $this;
    }

    public function setUrl($url)
    {
        $this->data['url'] = $url;
        return $this;
    }

    public function setType($type)
    {
        $this->data['type'] = $type;
        return $this;
    }

    public function setArticle($article)
    {
        $this->data['article'] = $article;
        return $this;
    }

    public function get($key = null)
    {
        if ($key) {
            return $this->data[$key] ?? null;
        }
        return $this->data;
    }

    public function generateStructuredData()
    {
        $locale = app()->getLocale();
        $baseUrl = config('app.url');
        
        $structuredData = [
            '@context' => 'https://schema.org',
            '@type' => 'EducationalOrganization',
            'name' => config('app.name', 'ElmCorner'),
            'description' => $this->data['description'],
            'url' => $baseUrl,
            'logo' => asset('images/logo.png'),
            'image' => asset('images/logo.png'),
            'sameAs' => [
                'https://www.facebook.com/profile.php?id=61586584370308',
                'https://www.instagram.com/elm.corner',
            ],
            'address' => [
                '@type' => 'PostalAddress',
                'addressCountry' => 'US',
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'contactType' => 'Customer Service',
                'email' => 'info@elmcorner.com',
            ],
            'offers' => [
                '@type' => 'Offer',
                'category' => 'Online Education',
            ],
        ];

        // Add article structured data if available
        if (isset($this->data['article'])) {
            $article = $this->data['article'];
            $structuredData['@type'] = 'Article';
            $structuredData['headline'] = $article['title'] ?? $this->data['title'];
            $structuredData['description'] = $article['description'] ?? $this->data['description'];
            $structuredData['image'] = $article['image'] ?? $this->data['image'];
            $structuredData['datePublished'] = $article['published_at'] ?? now()->toIso8601String();
            $structuredData['dateModified'] = $article['updated_at'] ?? now()->toIso8601String();
            $structuredData['author'] = [
                '@type' => 'Organization',
                'name' => config('app.name', 'ElmCorner'),
            ];
            $structuredData['publisher'] = [
                '@type' => 'Organization',
                'name' => config('app.name', 'ElmCorner'),
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => asset('images/logo.png'),
                ],
            ];
        }

        return json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    public function generateBreadcrumbStructuredData($items)
    {
        $structuredData = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => [],
        ];

        $position = 1;
        foreach ($items as $item) {
            $structuredData['itemListElement'][] = [
                '@type' => 'ListItem',
                'position' => $position++,
                'name' => $item['name'],
                'item' => $item['url'],
            ];
        }

        return json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
}
