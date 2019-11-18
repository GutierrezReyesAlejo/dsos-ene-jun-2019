<?php
namespace App\Http\Models\PW;

use Illuminate\Database\Eloquent\Model;

class Ejemplo_Modelo extends Model{
    //nombre de la tabla
    protected $table = 'practicas';

    //llave primaria
    protected $primarykey = 'id';
    public $timestamps = 'false';

    //aqui los elementos a mostrarse en la tabla 
    protected $filltable = ['id','nombre'];
}