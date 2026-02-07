<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OptimizeResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Check if response supports headers (some error responses might not)
        if (!method_exists($response, 'header')) {
            return $response;
        }

        // Add caching headers for static assets
        if ($request->is('build/*') || $request->is('*.css') || $request->is('*.js') ||
            $request->is('*.woff2') || $request->is('*.webp') || $request->is('*.jpeg') || $request->is('*.jpg') || $request->is('*.png')) {
            $response->header('Cache-Control', 'public, max-age=31536000, immutable');
            $response->header('Expires', gmdate('D, d M Y H:i:s \G\M\T', time() + 31536000));
        } else {
            // Disable HTML caching while debugging/deploying
            $response->header('Cache-Control', 'no-cache, private');
        }

        // Enable gzip compression
        $response->header('Vary', 'Accept-Encoding');
        
        // Security headers that also improve performance
        $response->header('X-Content-Type-Options', 'nosniff');
        $response->header('X-Frame-Options', 'SAMEORIGIN');

        return $response;
    }
}
