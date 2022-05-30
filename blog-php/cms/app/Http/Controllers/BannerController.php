<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner; //Instanciamos el modelo de articulos
class BannerController extends Controller
{
    //
        public function traerBanner(){
           
            $banner = Banner::all();   
            //variable $blog enviada hacia 
            return view('paginas.banner', array('banner' => $banner ));
                                                                                       
            // 'banner' = nombre de tabla
            // $banner = variable que guarda lo que obtiene de la tabla.
             //Banner::all();  = Traer los objetos de la clase Administradores de la base de datos.
    }  
}
