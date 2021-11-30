<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;

class AuthAdmin
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
        if (session('user_type') === 'ADM')
        {
            session(['user_type'=> 'ADM']);
            return redirect()->route(RouteServiceProvider::HOME);
        }
        else if(session('user_type') === 'USR')
        {
            session(['user_type'=>'USR']);
            return redirect()->route(RouteServiceProvider::HOME);
        }
        return $next($request);
    }
}
