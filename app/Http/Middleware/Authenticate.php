<?php

namespace App\Http\Middleware;

use Closure;

class Authenticate
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
        if (user()->login) {
            return $next($request);
        }

        return redirect(route('ecommerce.login', ['next' => $request->url()]));
    }
}
