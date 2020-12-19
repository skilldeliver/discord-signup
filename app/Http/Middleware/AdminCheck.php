<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class AdminCheck
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
        $roles = json_decode(Auth::user()->roles);

        if(Auth::user() && in_array('Discord Server Management', $roles)) {
            return $next($request);
        }

        return redirect(route('homepage'))->with('error', 'You have not admin access');
    }
}
