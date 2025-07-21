<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VerifyApiKey
{
    public function handle(Request $request, Closure $next)
    {
        
        $apiKey = $request->header('X-API-KEY');

        if (!$apiKey || !hash_equals(env('API_KEY'), $apiKey)) {
            Log::alert('Unauthorized API access attempt', [
                'ip' => $request->ip(),
                'endpoint' => $request->path(),
                'agent' => $request->userAgent()
            ]);

            return response()->json([
                'status' => 'error',
                'message' => 'Invalid or missing API key'
            ], 401);
        }

        return $next($request);
    }
}
