<?php

namespace App\Http\Middleware;

use  Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class checkLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->locale != null){
            App::setLocale(locale);
        }
        return $next($request);
    }
}
