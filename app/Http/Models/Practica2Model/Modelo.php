<?php
namespace App\Http\Models\Practica2Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Modelo extends Model{
    //nombre de la tabla
    protected $table = 'practica2';

    //llave primaria
    protected $primarykey = 'id';
    public $timestamps = false;

    //aqui los elementos a mostrarse en la tabla 
    protected $fillable = [
        'id','nombre','apellido_paterno','apellido_materno','edad','direccion','telefono'
    ];
}