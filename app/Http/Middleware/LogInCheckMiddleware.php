<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogInCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('LogInId')) {
            return redirect('/')->with('fail','You have to Log in First');
        }
        return $next($request);
    }
}
