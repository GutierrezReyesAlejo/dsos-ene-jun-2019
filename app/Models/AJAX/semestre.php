<?php

namespace App\Models\AJAX;

use Illuminate\Database\Eloquent\Model;

class semestre extends Model
{
    //aqui se declara el nombre de la tabla que esta en mysql
    protected  $table = 'semestre';
    // aqui la llave primaria de la tabla
    protected $primarykey = 'id';
    public $timestamps = false;
    // aqui los elementos a mostrarse de la tabla en cuestion
    protected $fillable = [
      'id','semestre'
    ];
}