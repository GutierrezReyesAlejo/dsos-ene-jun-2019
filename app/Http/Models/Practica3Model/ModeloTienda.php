<?php
namespace App\Http\Models\Practica3Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class ModeloTienda extends Model{
    //nombre de la tabla
    protected $table = 'tienda';

    //llave primaria
    protected $primarykey = 'id';
    public $timestamps = false;

    //aqui los elementos a mostrarse en la tabla 
    protected $fillable = [
        'razon_social','rfc','nombre_dueno','direccion_dueno','tipo_empresa','telefono', 'fecha_ingreso'
    ];
}