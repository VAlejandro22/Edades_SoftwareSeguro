<?php

namespace App\Http\Controllers;

class GrupoController extends Controller
{
    public function bebes() {
        return view('grupos.bebes');
    }

    public function ninos() {
        return view('grupos.ninos');
    }

    public function adolescentes() {
        return view('grupos.adolescentes');
    }

    public function jovenes() {
        return view('grupos.jovenes');
    }

    public function adultos() {
        return view('grupos.adultos');
    }

    public function mayores() {
        return view('grupos.mayores');
    }

    public function longevos() {
        return view('grupos.longevos');
    }
}
