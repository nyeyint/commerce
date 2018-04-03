<?php

namespace App\Http\Middleware;

use Closure;

class PGResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $allowedStatus = [
            'dev', 'staging', 'prod', 'development', 'stag', 'production'
        ];

        if (!in_array($request->status, $allowedStatus)) {
            return abort(404);
        }

        return $next($request);
    }
}
