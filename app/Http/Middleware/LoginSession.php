<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginSession
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
        if (!session('success')) {
            return redirect('/');
        }

        return $next($request);
    }
}
