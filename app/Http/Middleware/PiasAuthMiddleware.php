<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PiasAuthMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!session('soap_token')) {
            return redirect()->route('soap.login.form')->with('error', 'Debe autenticarse primero');
        }
        
        return $next($request);
    }
}