<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller 
{
    public function traerBlog(){
            //devuelve toda la tabla
            $blog = Blog::all(); 

            return view('paginas.blog', array('blog' => $blog));
            // 'blog' = nombre de tabla
            // $blog = variable de arriba.
    }
}
