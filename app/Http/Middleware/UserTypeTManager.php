<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserTypeTManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // UserTypeUser middleware
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->usertype === 'tmanager') {
            return $next($request);
        }

        return redirect('/')->with('error', 'Unauthorized access');
    }
}
