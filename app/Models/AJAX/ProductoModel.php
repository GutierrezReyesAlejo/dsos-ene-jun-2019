<?php

namespace App\Models\AJAX;

use Illuminate\Database\Eloquent\Model;

class ProductoModel extends Model
{
    //aqui se declara el nombre de la tabla que esta en mysql
    protected  $table = 'producto';
    // aqui la llave primaria de la tabla
    protected $primarykey = 'id';
    public $timestamps = false;
    // aqui los elementos a mostrarse de la tabla en cuestion
    protected $fillable = [      
	    'nombre',
	    'tipo',
	    'proveedor',
	    'precio_unitaria',
	    'precio_venta'
    ];
}