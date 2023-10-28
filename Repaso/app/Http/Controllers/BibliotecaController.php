<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\validadorFormularioDiario;

class BibliotecaController extends Controller
{
    public function metodoInicio(){
        return view('welcome');
    }

    public function metodoFormulario(){
        return view('formulario');
    }
        
     public function metodoRecuerdo(){
        return view('recuerdos');  
    }
  
    public function metodoGuardar(validadorFormularioDiario $req){

        /*$validated = $req->validate([
            'txtTitulo' => 'required|max:255',
            'txtRecuerdo' => 'required|min:5',
        ]);*/

        return redirect('/formulario')->with('Confirmacion','Tu recuerdo llego al controlador');


/*        echo"<p>";
            echo $req->path();
            echo $req->method();
            echo $req->ip();
            echo $req->url();
        echo"</p>";*/
    }
}
