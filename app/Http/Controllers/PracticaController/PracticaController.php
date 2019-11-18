<?php
namespace App\Http\Controllers\PracticaController;

use App\Http\Controllers\Controller;

use App\Http\Models\PW\Ejemplo_Modelo;

class PracticaController extends Controller{
    public function ver_datos(){
        // Practica 0
       /* $practica = Ejemplo_Modelo::
            select('id', 'nombre')->get();

        return $practica;*/
        $practica1 = Ejemplo_Modelo::
            select('id', 'nombre')->take(1)->first();

            return view('PW/ver_datos')->with('variable', $practica1);
    }
}


?>