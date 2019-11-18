<?php

namespace App\Models\AJAX;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    //aqui se declara el nombre de la tabla que esta en mysql
    protected  $table = 'alumno_materia';
    // aqui la llave primaria de la tabla
    protected $primarykey = 'id';
    public $timestamps = false;
    // aqui los elementos a mostrarse de la tabla en cuestion
    protected $fillable = [
      'id','nombre_alumno','numero_control','semestre','materia'
    ];
}