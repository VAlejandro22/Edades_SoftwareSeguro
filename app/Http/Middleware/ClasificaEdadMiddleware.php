<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\AgeRouterService;
use Illuminate\Support\Facades\DB;

class ClasificaEdadMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $edad = $request->input('edad');

        if (!is_numeric($edad) || $edad < 0 || $edad > 120) {
            return redirect('/error');
        }

        session(['edad' => $edad]);

        // Guardar en DB (opcional si existe tabla)
        DB::table('registro_edades')->insert([
            'edad' => $edad,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $ruta = AgeRouterService::rutaPorEdad((int) $edad);
        return redirect($ruta);
    }
}
