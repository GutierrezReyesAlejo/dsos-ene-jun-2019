<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Api\InegiModel;

class InegiController extends Controller
{

  // 22/05/2019
  /** ----------------------------------------------------<Guzzle>---------------------- 
   * 
   * 
   * 
   *                                        GUZZLE
   * 
   * 
   * 
   * ----------------------------------------------------------------------------------------*/

  public function obtieneApi($id)
  {
    //$respuesta = $this->peticion('GET', "http://alekius.to/api/auth/source?id={$id}");
    //$respuesta = $this->peticion('GET', "https://myapidsos.herokuapp.com/api/auth/buscar?id={$id}");
    $respuesta = $this->peticion('GET', "https://serene-scrubland-29503.herokuapp.com/api/auth/source?id={$id}");


    $datos = json_decode($respuesta);
    return json_encode($datos);
  }

  public function apiRegistrar(Request $request)
  {
    $respuesta = $this->peticion(
      'POST', /* ------------------POST--------------------*/
      //"http://alekius.to/api/auth/new",
      //"https://myapidsos.herokuapp.com/api/auth/insertar",
      "https://serene-scrubland-29503.herokuapp.com/api/auth/new",
      [
        'headers' => ['Content-Type' => 'application/x-www-form-urlencoded', 'X-Requested-With' => 'XMLHttpRequest'],
        'form_params' =>
        [
          'nom_estab' => $request->nom_estab,
          'cod_postal' => $request->cod_postal,
          'id_actividad' => $request->id_actividad,
          'raz_social' => $request->raz_social,
          'telefono' => $request->telefono
        ]
      ]
    );
    $html_data = json_decode($respuesta);
    $html_response = json_encode($html_data);
    return $html_response;
  }

  function apiactualizar(Request $request, $id)
  {
    $respuesta = $this->peticion(
      'PUT', /* -------------PUT-------------------------*/
      //"http://alekius.to/api/auth/edit/{$id}",
      //"https://myapidsos.herokuapp.com/api/auth/actualizar",
      "https://serene-scrubland-29503.herokuapp.com/api/auth/edit/{$id}",
      [
        'headers' => [
          'Content-Type' => 'application/x-www-form-urlencoded',
          'X-Requested-With' => 'XMLHttpRequest'
        ],
        'form_params' =>
        [
          'nom_estab' => $request->nom_estab,
          'cod_postal' => $request->cod_postal,
          'id_actividad' => $request->id_actividad,
          'raz_social' => $request->raz_social,
          'telefono' => $request->telefono
        ]
      ]
    );
    $html_data = json_decode($respuesta);
    $html_response = json_encode($html_data);
    return $html_response;
  }

  function apiborrar($id)
  {
    $respuesta = $this->peticion(
      'PUT', /* -------------PUT-------------------------*/
      //"http://alekius.to/api/auth/delete/{$id}"
      //"https://dsos-equipo-chido.000webhostapp.com/api/auth/delete/{$id}"
      //"https://myapidsos.herokuapp.com/api/auth/eliminar/{$id}",
      "https://serene-scrubland-29503.herokuapp.com/api/auth/delete/{$id}",
      [
        'headers' => [
          'Content-Type' => 'application/x-www-form-urlencoded',
          'X-Requested-With' => 'XMLHttpRequest'
        ]
      ]

    );
    $html_data = json_decode($respuesta);
    $html_response = json_encode($html_data);
    return $html_response;
  }

  /** -------------------------------------------------------------------------- 
   * 
   * 
   * 
   *                                        API
   * 
   * 
   * 
   * ----------------------------------------------------------------------------------------*/

  // GET
  public function buscar(Request $request)
  {
    $respuesta = InegiModel::where('id', $request->id)->get();
    

    return response()->json($respuesta);
  }

  //POST
  public function insertar(Request $request)
  {
    //$id = $request->id;
    $nom_estab = $request->nom_estab;
    $cod_postal = $request->cod_postal;
    $id_actividad = $request->id_actividad;
    //$latitud = $request->latitud;
    //$longitud = $request->longitud;
    //$nomb_asent = $request->nomb_asent;
    //$nom_e = $request->nom_e;
    //$nom_vial = $request->nom_vial;
    $raz_social = $request->raz_social;
    $telefono = $request->telefono;
    //$tipocencom = $request->tipocencom;

    InegiModel::create([
      //'id' => $id, 'nom_estab' => $nom_estab, 'cod_postal' => $cod_postal, 
      'id_actividad' => $id_actividad, // 'latitud' => $latitud, 'longitud' => $longitud, 'nomb_asent' => $nomb_asent, 'nom_e' => $nom_e, 'nom_vial' => $nom_vial, 'raz_social' => $raz_social, 'telefono' => $telefono, 'tipocencom' => $tipocencom
      'nom_estab' => $nom_estab, 'cod_postal' => $cod_postal,
      'raz_social' => $raz_social, 'telefono' => $telefono
    ]);

    return response()->json(['status_code' => '200', 'descripcion' => 'Ok', 'mensaje' => 'Post correcto']);
  }

  //PUT
  public function actualizar(Request $request, $id)
  {
    $nom_estab = $request->nom_estab;
    $cod_postal = $request->cod_postal;
    $id_actividad = $request->id_actividad;
    $latitud = $request->latitud;
    $longitud = $request->longitud;
    $nomb_asent = $request->nomb_asent;
    $nom_e = $request->nom_e;
    //$nom_vial = $request->nom_vial;
    $raz_social = $request->raz_social;
    $telefono = $request->telefono;
    //$tipocencom = $request->tipocencom;


    // $eliminado = InegiModel::where('id', $id)->delete();
    $editar = InegiModel::where('id', '=', $id)
      ->update(
        [
          'nom_estab' => $nom_estab,
          'cod_postal' => $cod_postal,
          'id_actividad' => $id_actividad,
          //'latitud'=>$latitud,
          //'longitud' => $longitud,
          //'nomb_asent'=>$nomb_asent,
          //'nom_e'=>$nom_e,         
          //'nom_vial'=>$nom_vial,
          'raz_social' => $raz_social,
          //'nom_vial'=>$nom_vial,
          'telefono' => $telefono
        ]
      );
    //'tipocencom'=>$tipocencom]);

    return response()->json(
      [
        'status_code' => '200',
        'descripcion' => 'Ok', 'mensaje' => 'Actualización Finalizada'
      ]
    );
  }

  //POST
  public function borrar($id)
  {
    $eliminado = InegiModel::where('id', '=', $id)->delete(['id', '=', $id]);

    return response()->json(['status_code' => '200', 'descripcion' => 'Ok', 'mensaje' => 'Eliminacion Finalizada']);
  }

  //GET
  public function lista($li, $cant)
  {
    $lista = InegiModel::offset($li)->limit($cant)->get();

    return response()->json($lista);
  }
}
