<?php


namespace Common\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuth {


    public function handle($request, Closure $next)
    {
        if (Auth::user())
        {
            return redirect()->route('LoginView');
        }

        return $next($request);
    }

}