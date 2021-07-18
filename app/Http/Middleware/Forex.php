<?php

namespace App\Http\Middleware;
use App\User;
use Closure;
use DateTime;

class Forex
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
        session()->put('lang','en');
        return $next($request);
    }
}
