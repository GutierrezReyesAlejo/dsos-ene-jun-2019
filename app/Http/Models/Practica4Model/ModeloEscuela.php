<?php
namespace App\Http\Models\Practica4Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class ModeloEscuela extends Model{
    //nombre de la tabla
    protected $table = 'escuela';

    //llave primaria
    protected $primarykey = 'id';
    public $timestamps = false;

    //aqui los elementos a mostrarse en la tabla 
    protected $fillable = [
        'id','rfc','curp', 'num_ctrl','cal1','cal2', 'cal3','fecha', 'avalaible'
    ];
}