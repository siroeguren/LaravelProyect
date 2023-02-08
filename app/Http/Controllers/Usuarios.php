<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuarios extends Controller
{

    public function arrayTravel($array)
    {
        var_dump($array['Hobbies']);
    }

    public function getUserByID($id)
    {
        $users =
        [
            [
                'Nombre' => 'Pepe',
                'Email' => 'pepe@gmail.com',
                'Hobbies' => ['Pesca','Deporte','Videojuegos']
            ],
            [
                'Nombre' => 'Maria',
                'Email' => 'maria@gmail.com',
                'Hobbies' => ['Maquillaje','Ganchillo','Comida']
            ],
            [
                'Nombre' => 'Juan',
                'Email' => 'juan@gmail.com',
                'Hobbies' => ['Correr','Limpiar','Cocinar']
            ]
        ];

        $array = $users[$id];
        // return $this->arrayTravel($array);
        return view ('user',$array);
    }
}
