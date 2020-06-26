<?php

namespace App\Http\Middleware;

use Closure;

class AssignGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if($guard != null) {
            $guards = explode('|', $guard);
            foreach ($guards as $element) {
                if(auth()->guard($element)->check()) {
                    auth()->shouldUse($element);
                    return $next($request);
                }
            }
        }
        return $next($request);
    }
}
