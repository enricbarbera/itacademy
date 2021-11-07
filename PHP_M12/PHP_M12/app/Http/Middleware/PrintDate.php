<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PrintDate
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
        echo date('d-m-Y');
        return $next($request);
    }
}
