<?php
namespace App\Http\Controllers\Practica3Controller;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use App\Http\Models\Practica3Model\ModeloTienda;

class ControladorTienda extends Controller{


    public function VerDatosDeBD(){       
        $practica3 = ModeloTienda::
            select('id','razon_social','rfc','nombre_dueno','direccion_dueno','tipo_empresa','telefono', 'fecha_ingreso')->get();

            return view('Practica3View/VistaTienda')->with('tiendas', $practica3);
    }

    public function insertarTienda(request $request){
        $razonsocial = $request->input('razon_social');
        $rfc = $request->input('rfc');
        $nombredueno = $request->input('nombre_dueno');
        $direccion = $request->input('direccion_dueno');
        $tipo = $request->input('tipo_empresa');
        $telefono = $request->input('telefono');
        $fecha = $request->input('fecha_ingreso');


        ModeloTienda::create([
            'razon_social'=> $razonsocial,
            'rfc'=> $rfc, 
            'nombre_dueno'=> $nombredueno,
            'direccion_dueno'=> $direccion,
            'tipo_empresa'=> $tipo,
            'telefono'=> $telefono,
            'fecha_ingreso'=> $fecha
            ]);


        return redirect()->to('verTiendas');

    }

    public function load_form_tienda(){
        return  view('Practica3View/FormularioTienda');
    } 

    /** ---------------------------------------------
     * |                                            |
     * |                Practica 4                  |
     * |                                            |  
     * | Descripcion:  'Update'                     |
     * |                                            |
     * ----------------------------------------------
     */


     // abrir formulario de edicion
     public function editar_datos($id){

         $uno = ModeloTienda::
         where('id', $id)->take(1)->first();

        return view('Practica3View/UpdateForm')->with('tienda', $uno);
     }

     public function doUpdateTienda(request $data, $id){
         $editar = ModeloTienda::find($id);

         $editar->razon_social = $data->razon_social;
         $editar->rfc = $data->rfc;
         $editar->nombre_dueno = $data->nombre_dueno;
         $editar->direccion_dueno = $data->direccion_dueno;
         $editar->tipo_empresa = $data->tipo_empresa;
         $editar->telefono = $data->telefono;
         $editar->fecha_ingreso = $data->fecha_ingreso;

         $editar->save();

         return redirect()->to('verTiendas');
     }
}


?>