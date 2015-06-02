<?php

class RegistroController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function registrarse()
	{
	
	$email =Input::get('email');
	$dni =Input::get('dni');
	$nombre = Input::get('nombre');
	$apellidos =Input::get('apellidos');
	$password =Input::get('password');
	$passwordconfirm =Input::get('password-confirm');
	
	$usuariData = array(
		'email' => $email,
		'dni' => $dni,
		'nombre' => $nombre,
		'apellidos' => $apellidos,
		'password'=>$password,
		'password-confirm'=>$passwordconfirm
	);
	
	$rules = array(
	        'dni' => 'required|min:2',
	        'email' => 'required|email|min:6|max:100|unique:usuarios',
	        'nombre' => 'required|min:2|max:100',
			'apellidos' => 'required|min:2|max:100',
			'password' => 'required|min:6|max:100',
			'password-confirm' => 'required|min:6|max:100|same:password' 
	);
	
	$messages = array(
		    'required' => 'El campo :attribute es obligatorio.',
		    'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
		    'email' => 'El campo :attribute debe ser un email válido.',
		    'max' => 'El campo :attribute no puede tener más de :min carácteres.',
		    'unique' => 'El email ingresado ya existe en la base de datos'
		);
		
	$validation = Validator::make(Input::all(), $rules);

	 if ($validation->fails())
	    {
 
	        return Redirect::back()->with_errors($validation)->with_input();
			
	 }
	 else{
	 
		$usuarioInsert = new Usuario();
		$usuarioInsert->email = $email;
		$usuarioInsert->dni = $dni;
		$usuarioInsert->nombre = $nombre;
		$usuarioInsert->apellidos = $apellidos;
		$usuarioInsert->password = Hash::make($password);
		
		$usuarioInsert->save();
	  
		$userdata = array(
            'email' => Input::get('email'),
            'password'=> Input::get('password')
        );

        if(Auth::attempt($userdata)){
        	return Redirect::to('/inicio');
        }
	}
	}

}