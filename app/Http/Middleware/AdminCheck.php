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
        if(Auth::user()){
            $userRoles = json_decode(Auth::user()->roles);

            $allowedRoles = [
                'Discord Server Management',
                'Administrator',
                'Leads'
            ];

            if(count(array_intersect($allowedRoles, $userRoles)) > 0) {
                return $next($request);
            }
        }

        return redirect(route('homepage'))->with('error', 'You have not admin access');
    }
}
