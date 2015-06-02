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
// Nos mostrará el formulario de login.
Route::get('login', 'AuthController@showLogin');
// Validamos los datos de inicio de sesión.
Route::post('login', 'AuthController@postLogin');
// Nos indica que las rutas que están dentro de él sólo serán mostradas si antes el usuario se ha autenticado.
Route::group(array('before' => 'auth'), function()
{
	// Esta será nuestra ruta de bienvenida.
	Route::get('', function()
	{
		return View::make("pages.index");
	});
	// Esta ruta nos servirá para cerrar sesión.
	Route::get('logout', 'AuthController@logOut');
});

Route::get("/inicio", function()
{
	return View::make("pages.index");
});

Route::POST('index1','IndexController@index2');

Route::get('/informacion', function()
{
	return View::make('pages.about');
});

Route::POST('about1','AboutController@about2');

Route::get('/publicar', function()
{
	return View::make('pages.publish');
});

Route::POST('publish1','PublishController@publish2');

Route::get('/objetivos', function()
{
	return View::make('pages.objectives');
});

Route::POST('objectives1','ObjectivesController@objectives2');

Route::get('/recomendados', function()
{
	return View::make('pages.recomend');
});

Route::POST('recommend1','RecommendController@recommend2');

Route::get('/puntua', function()
{
	return View::make('pages.rating');
});

Route::POST('rating1','RatingController@rating2');

Route::get('/contacto', function()
{
	return View::make('pages.contact');
});

Route::POST('contact1','ContactController@contact2');

Route::get('/iniciosesion', function()
{
	return View::make('pages.login');
});

Route::POST('login1','LoginController@login2');

Route::get('/registro', function()
{
	return View::make('pages.register');
});
<<<<<<< HEAD

//Route::POST('register1','RegisterController@register2');
Route::POST('register1','RegistroController@registrarse');
=======
Route::POST('register1','RegisterController@register2');
>>>>>>> origin/master

Route::get('selectejercicio', array('uses' => 'RatingController@rating2'));

Route::POST('rating1','RatingController@rating2');

<<<<<<< HEAD
Route::get('selectalimentos', array('uses' => 'AlimentosController@rating2'));

Route::POST('rating1','AlimentosController@rating2');

Route::get('insertrutina', array('uses' => 'InsertRutinasController@rating2'));

Route::POST('rating1','InsertRutinasController@rating2');

Route::get('insertejrutina', array('uses' => 'InsertEjRutinaController@rating2'));

Route::POST('rating1','InsertEjRutinaController@rating2');
=======
Route::get('insertrutina', array('uses' => 'InsertRutinasController@rating2'));

Route::POST('rating1','InsertRutinasController@rating2');
>>>>>>> origin/master
