<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GzipMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
       /* $response = $next($request);
        $response -> header('Content-Encoding','gzip');
        $response -> setContent(gzencode($response->getContent(),9));
        return $response; */
        $response = $next($request);
        $accept_encoding = $request->header('Accept-Encoding');
        if (strpos($accept_encoding, 'gzip') !== false && $response->getStatusCode() == 200) {
            $content = gzencode($response->getContent(), 9);
            $response->setContent($content);
            $response->header('Content-Encoding', 'gzip');
            $response->header('Vary', 'Accept-Encoding');
            $response->header('Content-Length', strlen($content));
        }
        return $response;
    }
}
