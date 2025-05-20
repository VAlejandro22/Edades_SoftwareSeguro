<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerificaEdadEnSesion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('edad')) {
        return redirect()->route('edad.formulario')->with('error', 'Por favor ingrese su edad primero.');
    }

    $edad = session('edad');
    $rutaPermitida = app(\App\Services\AgeRouterService::class)->rutaPorEdad($edad);

    // Si intenta acceder a una ruta distinta de la que le corresponde
    if (!$request->is(ltrim($rutaPermitida, '/'))) {
        return redirect($rutaPermitida)->with('error', 'No puede acceder a esta sección.');
    }

    return $next($request);
    }
}
