<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirigeSiYaTieneEdad
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('edad')) {
            // Redirigir a la ruta permitida para su grupo
            $ruta = app(\App\Services\AgeRouterService::class)->rutaPorEdad(session('edad'));
            return redirect($ruta);
        }

        return $next($request);
    }
}
