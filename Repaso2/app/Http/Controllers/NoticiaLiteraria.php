<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaLiteraria extends Controller
{
    //
    public function metodoInicio(){
        return view('inicio');
    }

    public function metodoFormulario(){
        return view('Registro');
    }
        
     public function metodoRecuerdo(){
        return view('welcome');  
    }
  
    public function metodoGuardar(validadorFormularioDiario $req){

        /*$validated = $req->validate([
            'txtTitulo' => 'required|max:255',
            'txtRecuerdo' => 'required|min:5',
        ]);*/

        return redirect('/Registro')->with('Confirmacion','Tu recuerdo llego al controlador');


/*        echo"<p>";
            echo $req->path();
            echo $req->method();
            echo $req->ip();
            echo $req->url();
        echo"</p>";*/
    }
}

