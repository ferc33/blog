<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulos;
class ArticulosController extends Controller
{
    
    //
        public function traerArticulos(){
           
            $articulos = Articulos::all();   
         
            return view('paginas.articulos', array('articulos' => $articulos ));
                                                                                       
            // 'articulos' = nombre de tabla
            // $articulos = variable que guarda lo que obtiene de la tabla.
             //Articulos::all();  = Traer los objetos de la clase Administradores de la base de datos.
    }  


}
