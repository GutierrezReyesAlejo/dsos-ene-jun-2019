<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('Hola', 'PW_Controller\micontrolador@index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('ver_datos', 'PracticaController\PracticaController@ver_datos');

Route::get('visualizar', 'PracticaController\PracticaController@ver_datos');

Route::get('verpractica2', 'Practica2Controller\Controlador@ver_datos');


Route::get('formulario', 'Practica2Controller\Controlador@ver_formulario');

Route::post('insertar', 'Practica2Controller\Controlador@insertar');

/**
 * ----------------------------------------
 *          Rutas para la practica 3
 * ----------------------------------------
 */

Route::post('InsertarTienda', 'Practica3Controller\ControladorTienda@insertarTienda');

Route::get('verTiendas', 'Practica3Controller\ControladorTienda@VerDatosDeBD');

Route::get('nuevatienda', 'Practica3Controller\ControladorTienda@load_form_tienda');

/** ---------------------------------------------
     * |                                            |
     * |                Practica 4                  |
     * |                                            |  
     * | Descripcion:  'Update'                     |
     * |                                            |
     * ----------------------------------------------
     */
// Abre formulario de edicion
Route::get('editarTienda/{id}', 'Practica3Controller\ControladorTienda@editar_datos');
Route::put('putTienda/{id}', 'Practica3Controller\ControladorTienda@doUpdateTienda');



/** ---------------------------------------------
     * |                                            |
     * |                Practica 5                  |
     * |                                            |  
     * | Descripcion:  'Escuela'                    |
     * |                                            |
     * ----------------------------------------------
     */
Route::get('listaEscuelas', 'Practica4Controller\ControladorEscuela@openViewEscuela');

Route::get('nuevaEscuela', 'Practica4Controller\ControladorEscuela@openInsertForm');
Route::post('postNewEscuela', 'Practica4Controller\ControladorEscuela@doPostNewEscuela');

Route::get('editEscuela/{id}', 'Practica4Controller\ControladorEscuela@openEditForm');
Route::put('putEscuela/{id}', 'Practica4Controller\ControladorEscuela@doUpdateEscuela');

/** ---------------------------------------------
     * |                                            |
     * |                Practica 6                  |
     * |                                            |  
     * | Eliminar - Delete                    |
     * |                                            |
     * ----------------------------------------------
     */

Route::get('deletEscuela/{id}', 'Practica4Controller\ControladorEscuela@openDeletForm');
Route::put('putDeletEscuela/{id}', 'Practica4Controller\ControladorEscuela@doDeletEscuela');

/**
     * ----------------------------------------
     *          Tabla de estudiantes
     * ----------------------------------------
     */


Route::get('tablaEscuela', 'Practica4Controller\ControladorEscuela@openViewTablaEscuela');



/** ---------------------------------------------
     * |                                            |
     * |                Practica 7                  |
     * |                                            |  
     * | Operaciones Ferreteria                     |
     * |                                            |
     * ----------------------------------------------
     */

// Open Forms
Route::get('listFerres', 'P5_Controller\ControladorFerre@openViewTableFerre');

Route::get('nuevaFerre', 'P5_Controller\ControladorFerre@openInsertForm');
Route::post('postNewFerre', 'P5_Controller\ControladorFerre@doPostNewFerre');

Route::get('editFerre/{id}', 'P5_Controller\ControladorFerre@openEditForm');
Route::put('putFerre/{id}', 'P5_Controller\ControladorFerre@doUpdateFerre');

Route::get('deletFerre/{id}', 'P5_Controller\ControladorFerre@openDeletForm');
Route::put('putDeletFerre/{id}', 'P5_Controller\ControladorFerre@doDeletFerre');

/** ---------------------------------------------
     * |                                            |
     * |                Practica N...                  |
     * |                                            |  
     * |                Ajax                    |
     * |                                            |
     * ----------------------------------------------
     */
//Route::get('lista_materias/{materias}', 'AJAx\AjaxController@listado_materias');
//Route::get('ajax', 'AJAx\AjaxController@formu');

Route::get('lista_materias/{materias}', 'AJAx\AjaxController@listado_materias');
Route::get('insertar', 'AJAx\AjaxController@formu');
Route::post('insertar', 'AJAx\AjaxController@insertar');

/** ---------------------------------------------
     * |                                            |
     * |                Practica N...                  |
     * |                                            |  
     * |                Examen                         |
     * |                                            |
     * ----------------------------------------------
     */

Route::get('insertarProducto', 'AJAx\AbarrotesC@openInsertFormProducto');
Route::get('insertarEmpresa', 'AJAx\AbarrotesC@openInsertFormEmpresa');


Route::get('verProductos', 'AJAx\AbarrotesC@openViewListaProductos');

Route::post('postNewEmpresa', 'AJAx\AbarrotesC@doPostNewEmpresa');
Route::post('postNewProducto', 'AJAx\AbarrotesC@doPostNewProducto');

Route::get('editarEmpresa/{id}', 'AJAx\AbarrotesC@openEditFormEmpresa');
Route::put('putUpdateEmpresa/{id}', 'AJAx\AbarrotesC@doUpdateEmpresa');

Route::get('borrarEmpresa/{id}', 'AJAx\AbarrotesC@openDeleteFormEmpresa');
Route::put('putDeleteEmpresa/{id}', 'AJAx\AbarrotesC@doDeleteEmpresa');

Route::get('listaEmpresa', 'AJAx\AbarrotesC@openViewListaEmpresa');

Route::get('venta', 'AJAx\AbarrotesC@openViewVenta');

Route::get('JSON/getPrecios/{id}', 'AJAx\AbarrotesC@getPreciosProducto');


// -----------------------------------------------------------------------------------------
//
//    / \    |  _ \  |_ _|
//   / _ \   | |_) |  | | 
//  / ___ \  |  __/   | | 
// /_/   \_\ |_|     |___|
//                        
//------------------------------------------------------------------------------------------


    //Route::get('source', 'Api\InegiController@buscar');

    Route::get('inegi/buscar/{id}', 'Api\InegiController@obtieneApi');

    Route::get('inegi/insertar', 'Api\InegiController@apiRegistrar');

    Route::get('inegi/actualizar/{id}', 'Api\InegiController@apiactualizar');

    Route::get('inegi/borrar/{id}', 'Api\InegiController@apiborrar');


    Route::get('inegi/lista/{li}/{cant}', 'Api\InegiController@lista');