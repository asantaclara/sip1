<?php

use Illuminate\Http\Request;
Use App\Actividad;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route::group(['middleware' => ['web', 'auth']], function () {
//----------------------------------LOGEO--------------------------------------------------------------------------------

//----------------------------------ACTIVIDADES--------------------------------------------------------------------------
    Route::get('actividades', 'ActividadController@index');
    Route::get('actividades/{actividad}', 'ActividadController@show');
    Route::post('actividades', 'ActividadController@store');
    Route::post('actividades/{actividad}', 'ActividadController@update');
    Route::delete('actividades/{actividad}', 'ActividadController@delete');

    Route::get('actividades/finalizar/{actividad}', 'ActividadController@finalizarAct\ividad');
    Route::get('actividades/comenzar/{actividad}', 'ActividadController@comenzarActividad');

    Route::get('actividades/profesional/{profesional}/cliente/{cliente}', 'ActividadController@getActividadesProfesionalCliente');
    Route::get('actividades/profesional/{profesional}', 'ActividadController@getActividadesProfesional');
    Route::get('actividades/cliente/{cliente}', 'ActividadController@getActividadesCliente');
    Route::get('actividades/profesional/{profesional}/templates', 'ActividadController@getTemplatesFromProfesional');

//----------------------------------CLIENTES--------------------------------------------------------------------------
    Route::get('clientes', 'ClienteController@index');
    Route::get('clientes/{cliente}', 'ClienteController@show');
    Route::post('clientes', 'ClienteController@store');
    Route::post('clientes/{cliente}', 'ClienteController@update');
    Route::delete('clientes/{cliente}', 'ClienteController@delete');

    Route::get('login/{dni}', 'ClienteController@login');

//----------------------------------MEDICIONES--------------------------------------------------------------------------
    Route::get('mediciones', 'MedicionController@index');
    Route::get('mediciones/{medicion}', 'MedicionController@show');
    Route::post('mediciones', 'MedicionController@store');
    Route::post('mediciones/{medicion}', 'MedicionController@update');
    Route::delete('mediciones/{medicion}', 'MedicionController@delete');

    Route::get('mediciones/cliente/{cliente}', 'MedicionController@medicionesDeCliente');



//----------------------------------NOTAS--------------------------------------------------------------------------
    Route::get('notas', 'NotaController@index');
    Route::get('notas/{nota}', 'NotaController@show');
    Route::get('notas/cliente/{cliente}', 'NotaController@notasDeCliente');
    Route::post('notas', 'NotaController@store');
    Route::post('notas/{nota}', 'NotaController@update');
    Route::delete('notas/{nota}', 'NotaController@delete');

//----------------------------------Productos--------------------------------------------------------------------------
    Route::get('productos', 'ProductosController@index');
    Route::get('productos/{producto}', 'ProductosController@show');
    Route::post('productos', 'ProductosController@store');
    Route::post('productos/{producto}', 'ProductosController@update');
    Route::delete('productos/{producto}', 'ProductosController@delete');

    Route::get('productos/grupo/{grupo}', 'ProductosController@buscarGrupo');
    Route::get('productos/grupo/{grupo}/categoria/{categoria}', 'ProductosController@buscarCategoria');

//----------------------------------PROFESIONALES--------------------------------------------------------------------------
    Route::get('profesionales', 'ProfesionalController@index');
    Route::get('profesionales/{profesional}', 'ProfesionalController@show');
    Route::post('profesionales', 'ProfesionalController@store');
    Route::post('profesionales/{profesional}', 'ProfesionalController@update');
    Route::delete('profesionales/{profesional}', 'ProfesionalController@delete');

//----------------------------------RECETAPRODUCTO--------------------------------------------------------------------------
    Route::get('recetaproductos', 'RecetaProductoController@index');
    Route::get('recetaproductos/{recetaproducto}', 'RecetaProductoController@show');
    Route::post('recetaproductos', 'RecetaProductoController@store');
    Route::post('recetaproductos/{recetaproducto}', 'RecetaProductoController@update');
    Route::delete('recetaproductos/{recetaproducto}', 'RecetaProductoController@delete');

    Route::get('recetaproductos/receta/{receta}', 'RecetaProductoController@productosDeReceta');


//----------------------------------RECETAS--------------------------------------------------------------------------

    Route::get('recetas', 'RecetaController@index');
    Route::get('recetas/{receta}', 'RecetaController@show');
    Route::post('recetas', 'RecetaController@store');
    Route::post('recetas/{receta}', 'RecetaController@update');
    Route::delete('recetas/{receta}', 'RecetaController@delete');

    Route::get('recetas/profesional/{profesional}', 'RecetaController@recetasDeProfesional');


//----------------------------------CLIENTERECETA--------------------------------------------------------------------------
    Route::get('clienterecetas', 'ClienteRecetaController@index');
    Route::get('clienterecetas/{clientereceta}', 'ClienteRecetaController@show');
    Route::post('clienterecetas', 'ClienteRecetaController@store');
    Route::post('clienterecetas/{clientereceta}', 'ClienteRecetaController@update');
    Route::delete('clienterecetas/{clientereceta}', 'ClienteRecetaController@delete');

    Route::get('clienterecetas/cliente/{cliente}', 'ClienteRecetaController@recetasDeCliente');

//----------------------------------PROFESIONALCLIENTE--------------------------------------------------------------------------
    Route::get('profesionalclientes', 'ProfesionalClienteController@index');
    Route::get('profesionalclientes/{profesionalCliente}', 'ProfesionalClienteController@show');
    Route::post('profesionalclientes', 'ProfesionalClienteController@store');
    Route::post('profesionalclientes/{profesionalCliente}', 'ProfesionalClienteController@update');
    Route::delete('profesionalclientes/{profesionalCliente}', 'ProfesionalClienteController@delete');

    Route::delete('profesionalclientes/profesional/{profesional}/cliente/{cliente}', 'ProfesionalClienteController@deleteRelacionProfesionalCliente');


    Route::get('profesionalclientes/clientes/{profesional}', 'ProfesionalClienteController@clientesDeProfesional');

//});

//----------------------------------LOGUEO--------------------------------------------------------------------------
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
