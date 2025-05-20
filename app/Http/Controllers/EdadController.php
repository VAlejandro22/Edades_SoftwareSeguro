<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdadController extends Controller
{
    public function formulario()
    {
        return view('edad');
    }

    public function clasificar(Request $request)
    {
        return redirect('/clasificar'); // Solo activa el middleware
    }
}
