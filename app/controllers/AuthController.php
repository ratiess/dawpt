<?php
class AuthController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Controlador de la autenticación de usuarios
	|--------------------------------------------------------------------------
	*/
	/**
	 * Muestra el formulario para login.
	 */
	public function showLogin()
	{
		// Verificamos que el usuario no esté autenticado
		if (Auth::check())
		{
		    // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
		    return Redirect::to('/inicio');
		}
		// Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
		return View::make('pages.login');
	}
	/**
	 * Valida los datos del usuario.
	 */
	public function postLogin()
	{

		$userdata = array(
            'email' => Input::get('email'),
            'password'=> Input::get('password')
        );

<<<<<<< HEAD
        if(Auth::attempt($userdata)){
=======
        if(Auth::attempt($userdata, Input::get('rememberme', 0))){
>>>>>>> origin/master
        	return Redirect::to('/inicio');
        }
        return Redirect::to('login')
					->with('mensaje_error', 'Tus datos son incorrectos')
				    ->withInput();
	}
	/**
	 * Muestra el formulario de login mostrando un mensaje de que cerro sesión.
	 */
	public function logOut()
	{
		Auth::logout();
		return Redirect::to('/login')
					->with('mensaje_error', 'Tu sesión ha sido cerrada.');
	}
}