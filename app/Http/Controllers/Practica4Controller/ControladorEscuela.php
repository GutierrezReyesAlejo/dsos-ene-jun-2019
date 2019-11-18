<?php

namespace App\Http\Controllers\Practica4Controller;

use App\Http\Controllers\Controller;  

use Illuminate\Http\Request; // Insert

use App\Http\Models\Practica4Model\ModeloEscuela; // Load Model

class ControladorEscuela extends Controller{

    
     // funcion auxiliar
     function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
      }
      

    /** -----------------------------------------
     *      RETORNAN VISTAS
     * ------------------------------------------
     */
    public function openViewEscuela(){
        $obj = ModeloEscuela::
            select('id','rfc','curp', 'num_ctrl','cal1','cal2', 'cal3','fecha')->get(); //->take(1)->first();

        return view('Practica4View/ViewDataEscuela')->with('escuelas', $obj);
    }

    public function openInsertForm(){
        return view ('Practica4View/InsertFormEscuela');
    }

    public function openEditForm($id){
        $escuela = ModeloEscuela::
        where('id', $id)->take(1)->first();

        return view ('Practica4View/UpdateFormEscuela')->with('escuela', $escuela);
    }

    public function openDeletForm($id){
        $escuela = ModeloEscuela::
        where('id', $id)->take(1)->first();

        return view ('Practica4View/DeletFormEscuela')->with('escuela', $escuela);
    }


    
    public function openViewTablaEscuela(){
        $obj = ModeloEscuela::
            where('avalaible', 1)->get();
        //select('id','rfc','curp', 'num_ctrl','cal1','cal2', 'cal3','fecha')->
        

        return view('Practica4View/ViewTablaEstudiante')->with('escuelas', $obj);
    }


      /** -----------------------------------------
     *      REALIZAN OPERACIONES
     * ------------------------------------------
     */

     public function doPostNewEscuela(Request $request){
        // Load values from InsertFormEscuela.blade.php
        $rfc    = $request->input('rfc');
        $curp   = $request->input('curp');
        $num_ctrl = $request->input('numero_control');
        $cal1   = $request->input('cal1');
        $cal2   = $request->input('cal2');
        $cal3   = $request->input('cal3');
        $fecha  = $request->input('fecha');

       ModeloEscuela::create(
           ['rfc' => $rfc,'curp'=> $curp, 'num_ctrl'=>$num_ctrl,
            'cal1'=>$cal1, 'cal2'=>$cal2, 'cal3'=>$cal3, 'fecha'=>$fecha, 
            'avalaible'=>1] );
            return redirect()->to('listaEscuelas');
       }

       /*
       public function loadEscuelaWithId($id){
        $uno = ModeloEscuela::
            where('id', $id)->take(1)->first();

        return view('Practica4View/UpdateFormEscuela')
                ->with('uno', $uno);
     }
    */
     public function doUpdateEscuela(request $data, $id){
         $editar = ModeloEscuela::find($id);

         $editar->id = $data->id;
         $editar->rfc = $data->rfc;
         $editar->curp = $data->curp;
         $editar->num_ctrl = $data->numero_control;
         $editar->cal1 = $data->cal1;
         $editar->cal2 = $data->cal2;
         $editar->cal3 = $data->cal3;
         $editar->fecha = $data->fecha;

         $editar->save();

         return redirect()->to('listaEscuelas');
     }

    public function doDeletEscuela(request $data, $id){
        $editar = ModeloEscuela::find($id);

        $modo_borrado = $data->input('eliminar');
        if ($modo_borrado == "borrarsuave"){
            // Borrado suave
            $editar->avalaible = 0;
            $editar->save();
        }else{
            // Borrado permanente
            $editar->delete();
        }
         return redirect()->to('listaEscuelas');
     }
     /** -----------------------------------------
     *      REALIZAN OPERACIONES
     * ------------------------------------------
     */


}

?>