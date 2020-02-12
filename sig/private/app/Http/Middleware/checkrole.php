<?php

namespace App\Http\Middleware;

use Closure;

class checkrole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $level)
    {
        if($request->user()->level == $level){
            return $next($request);
        }
        return view('/login');
    }
}
