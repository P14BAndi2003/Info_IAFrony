<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cache;

class CacheStaticFilesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Vérifiez que la réponse est un objet Response et que le code de statut est 200 (OK)
      
            // Récupérez l'URL de la requête
            $url = $request->url();

            // Vérifiez que l'URL est celle d'un fichier statique (CSS, JS, images, etc.)
            if (preg_match('/\.(css|js|jpg|jpeg|png|gif|ico|ttf)$/', $url)) {
                // Ajoutez un en-tête de cache
                $response->header('Cache-Control', 'public, max-age=31536000, immutable');
            }
        

        return $response;
    }
}
