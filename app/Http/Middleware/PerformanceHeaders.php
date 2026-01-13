<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PerformanceHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Add performance and security headers
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        $response->headers->set('X-XSS-Protection', '1; mode=block');
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
        
        // Cache control for static assets
        if ($request->is('build/*') || $request->is('images/*') || $request->is('css/*') || $request->is('js/*')) {
            $response->headers->set('Cache-Control', 'public, max-age=31536000, immutable');
        } else {
            // Cache control for HTML pages
            $response->headers->set('Cache-Control', 'public, max-age=3600, must-revalidate');
        }
        
        // Preload critical resources
        $preloadLinks = [];
        
        // Add font preload
        $preloadLinks[] = '<https://fonts.gstatic.com/s/almarai/v12/tssoApx6ipKtKpgTmsMhHw.woff2>; rel=preload; as=font; type=font/woff2; crossorigin';
        
        if (!empty($preloadLinks)) {
            $response->headers->set('Link', implode(', ', $preloadLinks));
        }

        return $response;
    }
}
