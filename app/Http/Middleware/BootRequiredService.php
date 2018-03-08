<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;

class BootRequiredService
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
        (empty($request->segments()))
          ? session(['segment' => '/'])
          : session(['segment' => $request->segments()[0]]);

        return $next($request);
    }
}
