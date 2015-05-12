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

Route::get("/inicio", function()
{
	return View::make("pages.index");
});
/*
Route::POST('index1','IndexController@index2');

Route::get('/informacion', function()
{
	return View::make('about');
});

Route::POST('about1','AboutController@about2');

Route::get('/objetivos', function()
{
	return View::make('objectives');
});

Route::POST('objectives1','ObjectivesController@objectives2');

Route::get('/recomendados', function()
{
	return View::make('recommend');
});

Route::POST('recommend1','RecommendController@recommend2');

Route::get('/contacto', function()
{
	return View::make('contact');
});

Route::POST('contact1','ContactController@contact2');

Route::get('/iniciosesion', function()
{
	return View::make('login');
});

Route::POST('login1','LoginController@login2');

Route::get('/registro', function()
{
	return View::make('register');
});

Route::POST('register1','RegisterController@register2');
*/