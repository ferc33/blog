<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\BlogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//RUTA DE INICIO
Route::get('/', function () {
    return view('plantilla');//nombre de la pagina principal welcome.blade ubicada en /resources/view
});

// RUTAS DE ACCESO /VIEW/PAGINAS/
Route::view('/','paginas.blog');
Route::view('/administradores' ,'paginas.administradores');
Route::view('/categorias','paginas.categorias');
Route::view('/articulos','paginas.articulos');
Route::view('/opiniones','paginas.opiniones');
Route::view('/banner','paginas.banner');
Route::view('/anuncios','paginas.anuncios');
//Auth::routes();

//Metodos GET
Route::get('/home', [App\Http\Controllers\HomeController::class,'index']) ->name('home');
Route::get('/', 'App\Http\Controllers\BlogController@traerBlog');
Auth::routes();
