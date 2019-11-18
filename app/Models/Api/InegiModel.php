<?php
namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class InegiModel extends Model{ 
    //nombre de la tabla
    protected $table = 'inegi';

    //llave primaria
    protected $primarykey = 'id';
    public $timestamps = false;

    //aqui los elementos a mostrarse en la tabla 
    protected $fillable = [
        'id',
        'nom_estab',
        'raz_social',
        'id_actividad',
        'nom_vial',
        'tipocencom',
        'nom_e',
        'nomb_asent',
        'cod_postal',
        'telefono',
        'latitud', 
        'longitud'
    ];
}