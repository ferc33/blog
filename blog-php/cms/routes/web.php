<?php



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
Auth::routes();
// // RUTAS DE ACCESO /VIEW/PAGINAS/
// Route::view('/','paginas.blog');
// Route::view('/administradores' ,'paginas.administradores');
// Route::view('/categorias','paginas.categorias');
// Route::view('/articulos','paginas.articulos');
// Route::view('/opiniones','paginas.opiniones');
// Route::view('/banner','paginas.banner');
// Route::view('/anuncios','paginas.anuncios');
// //Auth::routes();

// //Metodos GET
// Route::get('/home', [App\Http\Controllers\HomeController::class,'index']) ->name('home');
// Route::get('/', 'App\Http\Controllers\BlogController@traerBlog');
// Route::get('/administradores', 'App\Http\Controllers\AdministradoresController@traerAdministradores');
// Route::get('/anuncios', 'App\Http\Controllers\AnunciosController@traerAnuncios');
// Route::get('/articulos', 'App\Http\Controllers\ArticulosController@traerArticulos');
// Route::get('/banner', 'App\Http\Controllers\BannerController@traerBanner');
// Route::get('/categorias', 'App\Http\Controllers\CategoriasController@traerCategorias');
// Route::get('/opiniones', 'App\Http\Controllers\OpinionesController@traerOpiniones');

Route::resource('/', 'BlogController');
Route::resource('/blog', 'BlogController');
Route::resource('/administradores', 'AdministradoresController');
Route::resource('/categorias', 'CategoriasController');
Route::resource('/articulos', 'ArticulosController');
Route::resource('/opiniones', 'OpinionesController');
Route::resource('/banner', 'BannerController');
Route::resource('/anuncios', 'AnunciosController');