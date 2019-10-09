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
    return view('index');
});


Route::get('/registerprovider', 'PageController@registerprovider')->name('registerprovider'); //INICIO DE SESSION CLIENTES
Route::post('/registerprovider', 'App\RegisterController@create')->name('registerprovider'); //INICIO DE SESSION CLIENTES


Route::get('/client', 'ServiceController@create')->name('client'); //INICIO DE SESSION CLIENTES
Route::post('/client', 'ServiceController@store')->name('client'); //COTIZACION Servicio

Route::get('/misservicios', 'ServiceController@index')->name('misservicios'); //VISTA PREVIA DE TODOS LOS SERVICIOS
Route::get('/misservicios/{slug?}', 'ServiceController@show'); //VISTA DE UN SEVICIO

Route::get('/cotizador', 'PageController@cotizador')->name('cotizador');//VISTA PREVIA DEL SERVICIO
Route::post('/cotizador', 'ServiceController@GuardarServicio'); //GUARDANDO SERVICIO

Route::get('/miperfil', 'PerfilController@index')->name('miperfil'); //DATOS PERSONAL DEL CLIENTE
Route::post('/miperfil', 'PerfilController@create')->name('miperfil'); //GUARDAR DATOS PERSONAL DEL CLIENTE
Route::get('/setperfil', 'PerfilController@create')->name('setperfil'); //DATOS PERSONAL DEL CLIENTE
Route::post('/setperfil', 'PerfilController@store')->name('setperfil'); //DATOS PERSONAL DEL CLIENTE
Route::get('/editperfil', 'PerfilController@edit')->name('editperfil'); //DATOS PERSONAL DEL CLIENTE
Route::post('/editperfil', 'PerfilController@update'); //DATOS PERSONAL DEL CLIENTE



Route::get('/contacto', 'PageController@contacto')->name('contacto'); //CONTACTO DESDE EL CLIENTE
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Auth::routes();
Route::get('/provider', 'ProviderControlller@index')->name('provider');
Route::get('/myservice', 'ProviderControlller@index')->name('myservice');
Route::post('/myservice', 'ServiceController@takeservice')->name('myservice');
Route::get('/myservice/{slag?}', 'ServiceController@preconfirm')->name('myservice');
Route::post('/myservice/{slag?}', 'ServiceController@takeservice')->name('myservice');


// Route::get('/preconfirm', 'ServiceController@edit')->name('preconfirm');






Route::get('/myperfil', 'ProviderControlller@indexprovider')->name('myperfil');


Route::get('/setprovider', 'ProviderControlller@createprovider')->name('setprovider'); //DATOS PERSONAL DEL CLIENTE
Route::post('/setprovider', 'ProviderControlller@setprovider')->name('setprovider'); //DATOS PERSONAL DEL CLIENTE
Route::get('/editprovider', 'ProviderControlller@editprovider')->name('editprovider'); //DATOS PERSONAL DEL CLIENTE
Route::post('/editprovider', 'ProviderControlller@updateprovider')->name('editprovider'); //DATOS PERSONAL DEL CLIENTE




// Route::post('/setprovider', 'ProviderControlller@setprovider')->name('setprovider');

Route::get('/myhistorial', 'PageController@myhistorial')->name('myhistorial');
Route::get('/contact', 'PageController@contact')->name('contact');
