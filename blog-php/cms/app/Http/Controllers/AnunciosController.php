<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncios;

class AnunciosController extends Controller
{
    public function traerAnuncios(){ //retorna en la vista la pagina anuncios y trae los datos de la tabla anuncios
            
            $anuncios = Anuncios::all();   
         
            return view('paginas.anuncios', array('anuncios' => $anuncios ));
}
}