<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administradores; //instanciamos el modelo Administradores.
class AdministradoresController extends Controller
{
    //
        public function traerAdministradores(){
           
            $administradores = Administradores::all();   
            //variable $blog enviada hacia 
            return view('paginas.administradores', array('administradores' => $administradores ));
                                                                                       
            // 'administradores' = nombre de tabla
            // $administradores = variable que guarda lo que obtiene de la tabla.
             //Administradores::all();  = Traer los objetos de la clase Administradores de la base de datos.
    }  
        
}
