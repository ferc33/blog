<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
class CategoriasController extends Controller
{
       public function traerCategorias(){
           
            $categorias = Categorias::all();   
            //variable $blog enviada hacia 
            return view('paginas.categorias', array('categorias' => $categorias ));
                                                                                       
            // 'categorias' = nombre de tabla
            // $categorias = variable que guarda lo que obtiene de la tabla.
             //Categorias::all();  = Traer los objetos de la clase Administradores de la base de datos.
    }  
}
