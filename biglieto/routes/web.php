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

Route::get('/', function () {
    return view('contenidoUser/recorrido');
});


Route::get('/recorrido','RecorridoController@index');
Route::post('/recorrido/registrarRecorrido','RecorridoController@store');
Route::post('/recorrido/buscarRecorrido','RecorridoController@buscar');
Route::put('/recorrido/actualizarRecorrido','RecorridoController@update');

Route::get('/empresa/{idEm}','EmpresaController@retornarVistaEm' );
Route::get('/page','EmpresaController@abrirPagina')->name('page');
Route::get('/empresa/{idEm}/index', 'EmpresaController@index');
Route::get('/empresa/{idEm}/recorridos', 'EmpresaController@recorridos');
Route::get('/empresa/{idEm}/oficinas', 'EmpresaController@oficinas');
Route::get('/empresa/{idEm}/servicios', 'EmpresaController@servicios');
Route::get('/nombreEm', 'EmpresaController@obtenerNombreEmpresa');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
