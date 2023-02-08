<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pruebas extends Controller
{
    public function hacerPrueba()
    {
        $datos = 
        [
            'usuario' => 'marta',
            'email' => 'marta@marta.com'
        ];

        return view('prueba',$datos);
    }
}
