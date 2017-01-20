<?php

namespace App\Http\Middleware;

use Closure;

class ValidateRegistration
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
        if($request->input('password')== '123456789'){
            echo 'Error';
        }
        return $next($request);
    }
}
