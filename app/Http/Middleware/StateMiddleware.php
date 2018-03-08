<?php

namespace App\Http\Middleware;

use Closure;
use App\Exceptions\StateMismatchException;

class StateMiddleware
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
        if(null == $request->_encrypted_state || null == $request->_plain_state) {
            throw new StateMismatchException("Error Processing Request");
        }  

        return $next($request);
    }
}
