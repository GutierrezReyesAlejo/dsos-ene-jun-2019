<?php
namespace App\Http\Models\P5_Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class ModeloFerre extends Model{
    //nombre de la tabla
    protected $table = 'ferreteria';

    //llave primaria
    protected $primarykey = 'id';
    public $timestamps = false;

    //aqui los elementos a mostrarse en la tabla 
    protected $fillable = [        
        'razon_social',
        'giro', 
        'domicilio_fiscal',
        'rfc',
        'estado',
        'anio_ingreso',
        'borrado_el'
    ];
}