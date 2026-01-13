<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class SitemapController extends Controller
{
    public function index()
    {
        $baseUrl = rtrim(config('app.url'), '/');
        $posts = Post::published()->latest()->get();
        
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"';
        $sitemap .= ' xmlns:xhtml="http://www.w3.org/1999/xhtml">' . "\n";
        
        // Homepage
        $sitemap .= $this->urlElement($baseUrl . '/en', '1.0', 'daily');
        $sitemap .= $this->urlElement($baseUrl . '/ar', '1.0', 'daily');
        
        // Blog index
        $sitemap .= $this->urlElement($baseUrl . '/en/blog', '0.8', 'weekly');
        $sitemap .= $this->urlElement($baseUrl . '/ar/blog', '0.8', 'weekly');
        
        // Blog posts
        foreach ($posts as $post) {
            if ($post->slug_en) {
                $sitemap .= $this->urlElement(
                    $baseUrl . '/en/blog/' . $post->slug_en,
                    '0.7',
                    'monthly',
                    $post->updated_at,
                    $baseUrl . '/ar/blog/' . ($post->slug_ar ?: $post->slug_en)
                );
            }
            if ($post->slug_ar) {
                $sitemap .= $this->urlElement(
                    $baseUrl . '/ar/blog/' . $post->slug_ar,
                    '0.7',
                    'monthly',
                    $post->updated_at,
                    $baseUrl . '/en/blog/' . ($post->slug_en ?: $post->slug_ar)
                );
            }
        }
        
        $sitemap .= '</urlset>';
        
        return response($sitemap, 200)
            ->header('Content-Type', 'application/xml');
    }
    
    private function urlElement($url, $priority, $changefreq, $lastmod = null, $alternateUrl = null)
    {
        $element = "  <url>\n";
        $element .= "    <loc>" . htmlspecialchars($url) . "</loc>\n";
        $element .= "    <priority>" . $priority . "</priority>\n";
        $element .= "    <changefreq>" . $changefreq . "</changefreq>\n";
        
        if ($lastmod) {
            $element .= "    <lastmod>" . $lastmod->toAtomString() . "</lastmod>\n";
        } else {
            $element .= "    <lastmod>" . now()->toAtomString() . "</lastmod>\n";
        }
        
        // Add alternate language versions
        if ($alternateUrl) {
            $hreflang = strpos($url, '/ar/') !== false ? 'en' : 'ar';
            $element .= "    <xhtml:link rel=\"alternate\" hreflang=\"" . $hreflang . "\" href=\"" . htmlspecialchars($alternateUrl) . "\" />\n";
            $element .= "    <xhtml:link rel=\"alternate\" hreflang=\"x-default\" href=\"" . htmlspecialchars(str_replace(['/ar/', '/en/'], '', $url)) . "\" />\n";
        } else {
            // Auto-detect alternate for homepage/blog index
            $alternateUrl = str_replace(['/en/', '/ar/'], ['/ar/', '/en/'], $url);
            if ($alternateUrl !== $url) {
                $hreflang = strpos($url, '/ar/') !== false ? 'en' : 'ar';
                $element .= "    <xhtml:link rel=\"alternate\" hreflang=\"" . $hreflang . "\" href=\"" . htmlspecialchars($alternateUrl) . "\" />\n";
            }
        }
        
        $element .= "  </url>\n";
        
        return $element;
    }
}
