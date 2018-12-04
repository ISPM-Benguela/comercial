<?php

namespace Comercio\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class isThisAdmin
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
        if(Auth::check())
        {
            if(Auth::user()->isItAuhorized("admin"))
            {
                return $next($request);
            }
        }
        return redirect()->route('login');
    }
}