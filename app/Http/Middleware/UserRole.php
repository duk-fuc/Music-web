<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class UserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {         //note:$next($request) yêu cầu của người dùng
        if(Auth::check() && Auth::user()->typeuser == 'user')
        {
            return $next($request);
        }
        else{
            return redirect()->route('login');
        }
        
    }
}
