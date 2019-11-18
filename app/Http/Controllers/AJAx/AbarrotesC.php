<?php

namespace App\Http\Controllers\AJAx;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\AJAX\ProductoModel;
use App\Models\AJAX\EmpresaModel;

class AbarrotesC extends Controller
{
  /* ============================================
              ABRIR FORMULARIOS Y VISTAS
      =============================================*/
  public function openInsertFormProducto()
  {
    return view('AJAX/InsertFormProducto');
  }

  public function openInsertFormEmpresa()
  {
    return view('AJAX/InsertFormEmpresa');
  }

  public function openViewListaProductos()
  {
    $enviar = ProductoModel::pluck('nombre', 'id');
    return view('AJAX/ListaProductos')->with('nombres', $enviar);
  }

  
  public function openEditFormEmpresa($id)
  {
    $enviar = EmpresaModel::where('id', $id)->take(1)->first();
    return view('AJAX/UpdateFormEmpresa')->with('empresa', $enviar);
  }

  public function openDeleteFormEmpresa($id)
  {
    $enviar = EmpresaModel::where('id', $id)->take(1)->first();
    return view('AJAX/DeletFormEmpresa')->with('empresa', $enviar);
  }

  public function openViewListaEmpresa()
  {
    $enviar = EmpresaModel::where('borrado', 1)->get();
    return view('AJAX/ViewListaEmpresa')->with('empresas', $enviar);
  }

  public function openViewVenta()
  {
    $enviar = ProductoModel::pluck('nombre', 'id');//(coca, 1)
    
      return view('AJAX/ViewVentas')->with('nombres', $enviar);;
  }
  

  /* ============================================
              OPERACIONES HTML
      =============================================*/

  public function doPostNewProducto(Request $request)
  {
    $nombre = $request->input('nombre');
    $tipo = $request->input('tipo');
    $proveedor = $request->input('proveedor');
    $precio_unitaria = $request->input('precio_unitaria');
    $precio_venta = $request->input('precio_venta');

    // $todos = $request->all();
    ProductoModel::create([
      'id' => '0',
      'nombre' => $nombre,
      'tipo' => $tipo,
      'proveedor' => $proveedor,
      'precio_unitaria' => $precio_unitaria,
      'precio_venta' => $precio_venta
    ]);
    //alumno::create($request->all());
    return redirect()->to('insertarProducto');
  }

  public function doPostNewEmpresa(Request $request)
  {
    $rfc = $request->input('rfc');
    $razon_social = $request->input('razon_social');
    $direccion_fiscal = $request->input('direccion_fiscal');
    $apoderado_fiscal = $request->input('apoderado_fiscal');
    $telefono = $request->input('telefono');

    // $todos = $request->all();
    EmpresaModel::create([
      'id' => '0',
      'rfc' => $rfc,
      'razon_social' => $razon_social,
      'direccion_fiscal' => $direccion_fiscal,
      'apoderado_fiscal' => $apoderado_fiscal,
      'telefono' => $telefono
    ]);
    //alumno::create($request->all());
    return redirect()->to('insertarEmpresa');
  }

  public function doDeleteEmpresa(request $request, $id)
  {

    $editar = EmpresaModel::find($id);
    $editar->borrado = '0';
    $editar->save();
    
    return redirect()->to('listaEmpresas');
  }

  public function doUpdateEmpresa(request $request, $id)
  {
    $editar = EmpresaModel::find($id);

    $editar->rfc = $request->input('rfc');
    $editar->razon_social = $request->input('razon_social');
    $editar->direccion_fiscal = $request->input('direccion_fiscal');
    $editar->apoderado_fiscal = $request->input('apoderado_fiscal');
    $editar->telefono = $request->input('telefono');

    $editar->save();

    return redirect()->to('editarEmpresa/'.$id);
  }
  /* ============================================
              OPERACIONES PARA JAVA SCRIPT
      =============================================*/
  public function getPreciosProducto($id)
  {
    $obj = ProductoModel::where('id', $id)->get();

    return $obj;
  }


  /*
  */
}
