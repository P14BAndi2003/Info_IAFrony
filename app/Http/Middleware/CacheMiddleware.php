<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CacheMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);


    // Configure cache headers for static files
  //      if (in_array($response->getStatusCode(), [200, 201, 203, 204, 206, 300, 301, 302, 304, 307, 308])) {
            $response->header('Cache-Control', 'public, max-age=31539000, immutable');
 //       }

        return $response;
    }
}
