<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\ApiKey;

class ApiKeyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $apiKey = $request->header('X-API-KEY');

        if (!$apiKey)
        {
            return response()->json(['error' => 'Kunci API kosong', 401]);
        }

        $apiKeyModel = ApiKey::where('key', $apiKey)->first();

        if (!$apiKeyModel)
        {
            return response()->json(['error' => 'Kunci API salah', 401]);
        }

        return $next($request);
    }
}
