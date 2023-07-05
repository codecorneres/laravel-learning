<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \    (\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {    
      
        // if(!Auth::user()->isAdmin == true){
        //     echo "Admin desn't Logged in.";
        // }
        return $next($request);
    }
}
