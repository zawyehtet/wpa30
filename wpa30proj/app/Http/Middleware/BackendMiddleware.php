<?php

namespace App\Http\Middleware;

use Closure;

class BackendMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard="super")
    {
        if(!auth()->guard($guard)->check()) {
            return redirect('404');
        }
        return $next($request);
    }
}
