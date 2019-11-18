<?php

namespace App\Http\Controllers\AJAx;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\AJAX\materia;
use App\Models\AJAX\semestre;
use App\Models\AJAX\alumno;


class AjaxController extends Controller
{
  public function listado_materias($materias)
  {
    $al = materia::select('id', 'nombre', 'semestre')
      ->where('semestre', $materias)
      ->get();
    return $al;
  }

  public function formu()
  {
    $enviar = semestre::pluck('semestre', 'id');
    return view('AJAX/materia')->with('semestre', $enviar);
  }

  public function insertar(Request $request)
  {
    $id = 0;
    $nombre_alumno = $request->input('nombre_alumno');
    $numero_control = $request->input('numero_control');
    $semestre = $request->input('idsemestre');
    $materia = $request->input('idmateria');

    // $todos = $request->all();
    alumno::create([
      'id' => 0, 'nombre_alumno' => $nombre_alumno, 'numero_control' => $numero_control,
      'semestre' => $semestre, 'materia' => $materia
    ]);
    //alumno::create($request->all());
    return redirect()->to('insertar');
  }
}
 