<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->rol == 'admin') {
            return $next($request);
        }

        return redirect('/')->with('error', 'No tienes acceso a esta sección');
    }
}
