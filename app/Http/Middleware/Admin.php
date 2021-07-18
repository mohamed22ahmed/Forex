<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\Http\Controllers\WebsiteController;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        session()->put('lang','en');
        return $next($request);
    }
}
