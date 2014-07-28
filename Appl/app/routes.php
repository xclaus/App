<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
|----------------------------------------------------------------------------
| Se definen las rutas
|----------------------------------------------------------------------------
*/

Route::get('/', function()
{
	return View::make('login');
});

Route::get('main', function()
{
	return View::make('main');
});

Route::get('resilencia', function()
{
	return View::make('resilencia');
});
/*
|----------------------------------------------------------------------------
| Se definen los controladores
|----------------------------------------------------------------------------
*/

//La ruta se debe especificar de la siguiente forma, rutadinamica,
Route::post('login' , 'loginController@login');
Route::get('logout', 'loginController@logout');
Route::post('post_resilencia' , 'resilenciaController@postData');





