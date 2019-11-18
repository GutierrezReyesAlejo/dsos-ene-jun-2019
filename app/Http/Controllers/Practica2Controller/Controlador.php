<?php
namespace App\Http\Controllers\Practica2Controller;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use App\Http\Models\Practica2Model\Modelo;

class Controlador extends Controller{
    public function ver_datos(){
       
        $practica2 = Modelo::
            select('nombre', 'apellido_paterno', 'apellido_materno')->take(1)->first();

            return view('Practica2View/Vista')->with('variable', $practica2);
    }

    public function insertar(request $request){
        $id = $request->input('id');
        $nombrealumno = $request->input('nombre');
        $apellidopaterno = $request->input('apellido_paterno');
        $apellidomaterno = $request->input('apellido_materno');
        $edad = $request->input('edad');
        $direccion = $request->input('direccion');
        $telefono = $request->input('telefono');

        Modelo::create(['id'=>$id,'nombre'=> $nombrealumno,
        'apellido_paterno'=> $apellidopaterno, 'apellido_materno'=> $apellidomaterno,
        'edad'=> $edad,'direccion'=> $direccion,
        'telefono'=> $telefono]);

        return redirect()->to('verpractica2');

    }

    public function ver_formulario(){
        return  view('Practica2View/InsertarDatos');
    } 

}


?>