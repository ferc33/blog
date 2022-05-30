<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opiniones;
class OpinionesController extends Controller
{
    //
        public function traerOpiniones(){
           
            $opiniones = Opiniones::all();   
            //variable $blog enviada hacia 
            return view('paginas.opiniones', array('opiniones' => $opiniones ));
                                                                                       
            // 'opiniones' = nombre de tabla
            // $opiniones = variable que guarda lo que obtiene de la tabla.
             //Opiniones::all();  = Traer los objetos de la clase Opiniones de la base de datos.
    }  
}
