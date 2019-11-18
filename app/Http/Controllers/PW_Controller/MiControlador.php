<?php
namespace App\Http\Controllers\PW_Controller;

use Iluminate\Http\Request;
use App\Http\Controllers\Controller;

class MiControlador extends Controller{
    public function index(){
        return view("PW/Hola");
    }    
}
?>