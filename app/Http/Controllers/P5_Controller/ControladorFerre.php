<?php

namespace App\Http\Controllers\P5_Controller;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request; // Insert

use App\Http\Models\P5_Model\ModeloFerre; // Load Model

class ControladorFerre extends Controller
{
    /** -----------------------------------------
     *      Abrir Vistas
     * ------------------------------------------
     */
    public function openViewTableFerre()
    {
        $obj = ModeloFerre::where('borrado_el', 1)->get();
        //select('id', 'razon_social','giro', 'domicilio_fiscal','rfc','estado', 'anio_ingreso')->get();

        return view('P5_View/ViewDataTableFerre')->with('ferres', $obj);
    }

    public function openInsertForm()
    {
        return view('P5_View/InsertFormFerre');
    }

    public function openEditForm($id)
    {
        $escuela = ModeloFerre::where('id', $id)->take(1)->first();

        return view('P5_View/UpdateFormFerre')->with('ferre', $escuela);
    }

    public function openDeletForm($id)
    {
        $escuela = ModeloFerre::where('id', $id)->take(1)->first();

        return view('P5_View/DeleteFormFerre')->with('ferre', $escuela);
    }

    // ==================================================================================

    public function doPostNewFerre(Request $request)
    {
        // Load values from InsertFormEscuela.blade.php
        $razon_social   = $request->input('razon_social');
        $giro   = $request->input('giro');
        $domicilio_fiscal = $request->input('domicilio_fiscal');
        $rfc   = $request->input('rfc');
        $estado   = $request->input('estado');
        $anio_ingreso   = $request->input('anio_ingreso');


        ModeloFerre::create(
            [
                'razon_social' => $razon_social,
                'giro' => $giro,
                'domicilio_fiscal' => $domicilio_fiscal,
                'rfc' => $rfc,
                'estado' => $estado,
                'anio_ingreso' => $anio_ingreso,
                'borrado_el' => 1
            ]
        );
        return redirect()->to('listFerres');
    }

    /*
       public function loadEscuelaWithId($id){
        $uno = ModeloEscuela::
            where('id', $id)->take(1)->first();

        return view('Practica4View/UpdateFormEscuela')
                ->with('uno', $uno);
     }
    */
    public function doUpdateFerre(request $request, $id)
    {
        $editar = ModeloFerre::find($id);

        $editar->razon_social   = $request->input('razon_social');
        $editar->giro          = $request->input('giro');
        $editar->domicilio_fiscal = $request->input('domicilio_fiscal');
        $editar->rfc           = $request->input('rfc');
        $editar->estado        = $request->input('estado');
        $editar->anio_ingreso   = $request->input('anio_ingreso');

        $editar->save();

        return redirect()->to('listFerres');
    }

    public function doDeletFerre(request $data, $id)
    {
        $editar = ModeloFerre::find($id);

        $modo_borrado = $data->input('eliminar');
        if ($modo_borrado == "borrarsuave") {
            // Borrado suave
            $editar->borrado_el = 0;
            $editar->save();
        } else {
            // Borrado permanente
            $editar->delete();
        }
        return redirect()->to('listFerres');
    }
}
 