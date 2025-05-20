<?php

use App\Http\Middleware\ClasificaEdadMiddleware;
use App\Http\Controllers\EdadController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\BebeController;
use App\Http\Controllers\NinoController;
use App\Http\Controllers\AdolescenteController;
use App\Http\Controllers\JovenController;
use App\Http\Controllers\AdultoController;
use App\Http\Controllers\MayorController;
use App\Http\Controllers\LongevoController;
use App\Http\Middleware\VerificaEdadEnSesion;
use App\Http\Middleware\RedirigeSiYaTieneEdad;
use Illuminate\Support\Facades\Session;

Route::post('/salir', function () {
    Session::flush(); 
    return redirect()->route('edad.formulario')->with('info', 'Has salido correctamente.');
})->name('salir');


Route::get('/', [EdadController::class, 'formulario'])
    ->middleware(RedirigeSiYaTieneEdad::class)
    ->name('edad.formulario');
Route::post('/clasificar', [EdadController::class, 'clasificar'])
    ->middleware(ClasificaEdadMiddleware::class);

// Route::middleware([VerificaEdadEnSesion::class])->group(function () {
    Route::get('/bebes', [BebeController::class, 'index']);
    Route::get('/ninos', [NinoController::class, 'index']);
    Route::get('/adolescentes', [AdolescenteController::class, 'index']);
    Route::get('/jovenes', [JovenController::class, 'index']);
    Route::get('/adultos', [AdultoController::class, 'index']);
    Route::get('/mayores', [MayorController::class, 'index']);
    Route::get('/longevos', [LongevoController::class, 'index']);
// });





Route::get('/error', function () {
    return view('error');
});

