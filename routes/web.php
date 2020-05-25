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

/*Route::get('/', function () {
//return view('contenido/contenido');
return view('web/master');
});*/

Auth::routes();
Route::get('home', 'HomeController@index')->name('home');
Route::get('dashboard', 'HomeController@dashboard');

/*--------------------Rutas Página Begin--------------------------*/
Route::get('/', 'WebController@index')->name('main');
Route::get('/#ubicacion', 'WebController@ubicacion')->name('ubicacion');
Route::get('/modulo', 'WebController@modular');
Route::get('/scraping', 'ScrapingController@index');
/*Quienes somos inicio*/
Route::get('/web/QuinesSomos/quienes_somos', 'QuienesSomosController@quienes_somos')->name('quienes_somos');
Route::get('/web/QuinesSomos/mision_vision', 'QuienesSomosController@mision_vision')->name('mision_vision');
Route::get('/web/QuinesSomos/organigrama', 'QuienesSomosController@organigrama')->name('organigrama');
/*Quienes somos Fin*/
/*---------------------Single routes------------------------*/
Route::get('/web/remate/remate', 'RematesController@remate')->name('remates');
Route::get('/web/email/', 'EmailController@index')->name('email');
/*---------------------Gobierno Corporativo-----------------*/
Route::get('/web/GobiernoCorporativo/electoral', 'GobiernoCorporativoController@electoral')->name('electoral');
Route::get('/web/GobiernoCorporativo/comite_directorio', 'GobiernoCorporativoController@comite_directorio')->name('directorio');
Route::get('/web/GobiernoCorporativo/comite_gestion_prevision', 'GobiernoCorporativoController@comite_gestion_prevision')->name('prevension');
Route::get('/web/GobiernoCorporativo/comite_gestion_riesgos', 'GobiernoCorporativoController@comite_gestion_riesgos')->name('riesgos');
Route::get('/web/GobiernoCorporativo/comite_tecnologia', 'GobiernoCorporativoController@comite_tecnologia')->name('tecnologia');
Route::get('/web/GobiernoCorporativo/auditoria', 'GobiernoCorporativoController@auditoria')->name('auditoria');
/*---------------------Convocatoria-------------------------*/
Route::get('/web/Convocatoria/asambleas', 'ConvocatoriasController@asambleas')->name('asambleas');
Route::get('/web/Convocatoria/licitaciones', 'ConvocatoriasController@licitaciones')->name('licitaciones');
Route::get('/web/Convocatoria/aseguradoras', 'ConvocatoriasController@aseguradoras')->name('aseguradoras');
Route::get('/web/Convocatoria/requerimiento', 'ConvocatoriasController@requerimiento')->name('requerimiento');
Route::get('/web/Convocatoria/comunicados', 'ConvocatoriasController@comunicado')->name('comunicados');
/*--------------------Educacion Financiera------------------*/
Route::get('/web/Educacion/programa_educacion', 'EducacionFinancieraController@programa_educacion')->name('programa_educacion');
Route::get('/web/Educacion/derechos_obligaciones', 'EducacionFinancieraController@derechos_obligaciones')->name('derechos_obligaciones');
Route::get('/web/Educacion/responsabilidad_social', 'EducacionFinancieraController@responsabilidad_social')->name('responsabilidad_social');
Route::get('/web/Educacion/liderazgo', 'EducacionFinancieraController@liderazgo')->name('liderazgo');
Route::get('/web/Educacion/multimedia', 'EducacionFinancieraController@multimedia')->name('multimedia');
/*--------------------Servicios-----------------------------*/
Route::get('/web/Servicios/otorgacion_creditos', 'ServiciosController@otorgacion_creditos')->name('otorgacion_creditos');
Route::get('/web/Servicios/certificados_aportacion', 'ServiciosController@certificados_aportacion')->name('certificados_aportacion');
Route::get('/web/Servicios/cambio_divisas', 'ServiciosController@cambio_divisas')->name('cambio_divisas');
/*--------------------Punto de reclamo----------------------*/
Route::get('/web/punto_reclamo/index', 'PuntoReclamoController@index')->name('punto_reclamo');
Route::get('/web/punto_reclamo/create', 'PuntoReclamoController@create'); //crear
Route::post('/web/punto_reclamo/', 'PuntoReclamoController@store'); //crear
/*--------------------Rutas Página End----------------------*/

/*Rutas remate*/
Route::get('/remate', 'RemateController@index'); //listado
Route::get('/remate/create', 'RemateController@create'); //crear
Route::post('/remate', 'RemateController@store'); //crear
Route::get('/remate/{id}/edit', 'RemateController@edit'); //formulario de edicion
Route::post('/remate/{id}/edit', 'RemateController@update'); //actualizar
Route::delete('/remate/{id}', 'RemateController@destroy'); //actualizar
/*---------*/

/*Rutas para solicitar crédito begin*/
Route::get('/solicitar-cre', 'SolicitudCreditoController@index'); //status Building

/*Solicitar crédito end*/
Route::get('/photo', 'PhotoController@index'); //listado
Route::get('/photo/{id}/edit', 'PhotoController@edit'); //formulario de edicion
Route::post('/photo/{id}/edit', 'PhotoController@update')->name('photo.editar'); //actualizar
Route::delete('/photo/{id}', 'PhotoController@destroy'); //actualizar

/* remates vue
Route::get('/remate', 'RemateController@index');
Route::post('/remate/registrar', 'RemateController@store');
Route::put('/remate/actualizar', 'RemateController@update');
Route::put('/remate/desactivar', 'RemateController@desactivar');
Route::put('/remate/activar', 'RemateController@activar');
Route::get('/remate/selectDepartamento', 'RemateController@selectDepartamento');
Route::get('/remate/listarPdf', 'RemateController@listarPdf')->name('remates_pdf');
 */

/*Inicio rutas usuario convencional*/
Route::middleware(['auth', 'usuario'])->group(function () {
    Route::get('/remate', 'RemateController@index'); //listado
    Route::get('/remate/create', 'RemateController@create'); //crear
    Route::post('/remate', 'RemateController@store'); //crear
    Route::get('/remate/{id}/edit', 'RemateController@edit'); //formulario de edicion
    Route::post('/remate/{id}/edit', 'RemateController@update'); //actualizar
    Route::delete('/remate/{id}', 'RemateController@destroy'); //actualizar
});
