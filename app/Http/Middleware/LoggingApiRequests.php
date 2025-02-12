<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoggingApiRequests
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        Log::info('API Request:', [
            'ip'      => $request->ip(),
            'url'     => $request->fullUrl(),
            'method'  => $request->method(),
            'headers' => $request->headers->all(),
            'body'    => $request->all(),
        ]);

        return $next($request);
    }
}
