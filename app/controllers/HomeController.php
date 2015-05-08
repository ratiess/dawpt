<?php

class HomeController extends BaseController {

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

	public function showWelcome()
	{
		return View::make('hello');
	}
	
	public function registrarse()
	{
	
$link = mysqli_connect("localhost","root","","daw_sharing");
$dni =Input::get('DNI');
$nombre = Input::get('Nombre');
$grupescolar =Input::get('GrupEscolar');
$email =Input::get('Email');
$tipocliente =Input::get('TipoCliente');
$contraseña =Input::get('Contraseña');


mysqli_query($link,"INSERT INTO clientes (DNI,Nombre,GrupEscolar,Email,TipoCliente,Contrasena) VALUES ('$dni','$nombre','$grupescolar','$email','$tipocliente','$contraseña')");

	return View::make('iniciosesion');
	}
	
	public function iniciarsesion()
	{
	
	$link = mysqli_connect("localhost","root","","daw_sharing");
	$email =Input::get('Email');
	$password =Input::get('password');

	$var=mysqli_query($link,"SELECT * FROM clientes WHERE Email='$email' and Contrasena='$password'");
	if (mysqli_num_rows($var) > 0){
		if($i=mysqli_fetch_array($var)){
			$nombre=$i['Nombre'];
			session_start();
			$_SESSION['nombre'] = $nombre;
			return View::make('index');
		}
	}else{
	return View::make('iniciosesion');
	}
	}
	
	public function cerrarsession(){
	session_destroy();
	return View::make('iniciosesion');
	}
	
	
	public function indexi()
	{
	$link = mysqli_connect("localhost","root","","daw_sharing");
	$Origen =Input::get('Origen');
	$Destino = Input::get('Destino');
	
	$variables=array('Origen' => $Origen, 'Destino' => $Destino);
	
	if (isset($_SESSION)){
	$_SESSION['Origen'] = $Origen;
	$_SESSION['Destino'] = $Destino;
	}
	else{
	session_start();
	$_SESSION['Origen'] = $Origen;
	$_SESSION['Destino'] = $Destino;
	}
	
	mysqli_query($link,"INSERT INTO rutas (Poblacion_ini,Poblacion_fin) VALUES ('$Origen','$Destino')");

	return View::make('index1',$variables);
	}
	
	public function index1i()
	{
	
	$link = mysqli_connect("localhost","root","","daw_sharing");
	$Cliente =Input::get('Cliente');
	$Matricula = Input::get('Matricula');
	$Marca = Input::get('Marca');
	$Modelo = Input::get('Modelo');
	$Origen = Input::get('Origen');
	$Destino = Input::get('Destino');	
	
	if (isset($_SESSION)){
	$_SESSION['Cliente'] = $Cliente;
	$_SESSION['Matricula'] = $Matricula;
	$_SESSION['Marca'] = $Marca;
	$_SESSION['Modelo'] = $Modelo;
		
	 }
	 else{
	 session_start();
	 $_SESSION['Cliente'] = $Cliente;
	$_SESSION['Matricula'] = $Matricula;
	$_SESSION['Marca'] = $Marca;
	$_SESSION['Modelo'] = $Modelo;
	
	}
	
	DB::table('vehiculos')
        ->join('clientes', 'vehiculos.id', '=', 'clientes.VEHICULOS_Id')
        ->select('vehiculos.id','vehiculos.Modelo','clientes.id', 'clientes.Nombre')
        ->get();
	
	
	$variables=array('Cliente' => $Cliente, 'Matricula' => $Matricula, 'Marca' => $Marca, 'Modelo' => $Modelo);

	mysqli_query($link,"INSERT INTO vehiculos (Matricula,Marca,Modelo) VALUES ('$Matricula','$Marca','$Modelo')");
	mysqli_query($link,"INSERT INTO clientes (TipoCliente) VALUES ('$Cliente')");
	
	return View::make('index2',$variables);
	}
	
	public function index2i()
	{
	
	$link = mysqli_connect("localhost","root","","daw_sharing");
	$Frecuencia =Input::get('Frecuencia');
	$Tipo = Input::get('Tipo');
	$fechaida = Input::get('fechaida');
	$fechavuelta = Input::get('fechavuelta');	
	$horaida = Input::get('horaida');	
	$minida = Input::get('minida');	
	$horavuelta = Input::get('horavuelta');	
	$minvuelta = Input::get('minvuelta');	
	$hora1 = $horaida.':'.$minida.':00';
	$hora2 = $horavuelta.':'.$minvuelta.':00';
	$anterior=Input::get('anterior');
	
	$variables=array('Frecuencia' => $Frecuencia, 'Tipo' => $Tipo, 'fechaida' => $fechaida, 'fechavuelta' => $fechavuelta, 'horaida' => $minida, 'minida' => $fechavuelta, 'horavuelta' => $horavuelta, 'minvuelta' => $minvuelta, 'hora1' => $hora1, 'hora2' => $hora2);
	
	
	if (isset($_SESSION)){
		session_start();
		$_SESSION['Frecuencia'] = $Frecuencia;
		$_SESSION['Tipo'] = $Tipo;
		$_SESSION['fechaida'] = $fechaida;
		$_SESSION['fechavuelta'] = $fechavuelta;
		$_SESSION['horaida'] = $horaida;
		$_SESSION['minida'] = $minida;
		$_SESSION['horavuelta'] = $horavuelta;
		$_SESSION['minvuelta'] = $minvuelta;
		$_SESSION['hora1'] = $hora1;
		$_SESSION['hora2'] = $hora2;
	 }
	 else{
	$_SESSION['Frecuencia'] = $Frecuencia;
	$_SESSION['Tipo'] = $Tipo;
	$_SESSION['fechaida'] = $fechaida;
	$_SESSION['fechavuelta'] = $fechavuelta;
	$_SESSION['horaida'] = $horaida;
	$_SESSION['minida'] = $minida;
	$_SESSION['horavuelta'] = $horavuelta;
	$_SESSION['minvuelta'] = $minvuelta;
	$_SESSION['hora1'] = $hora1;
	$_SESSION['hora2'] = $hora2;
	}
	
	if ($anterior){
		return View::make('index1',$variables);
	}
	else{
	/*mysqli_query($link,"INSERT INTO fechas (FechaIda, FechaVuelta, HoraIda, HoraVuelta) VALUES ('$fechaida','$fechavuelta','$hora1','$hora2')");
	mysqli_query($link,"INSERT INTO tipos (Tipo) VALUES ('$Tipo')");
	mysqli_query($link,"INSERT INTO realizas (TipoFrecuencia) VALUES ('$Frecuencia')");*/

	return View::make('index3');
	}
	}
	
	
	public function index3i()
	{
	
	$link = mysqli_connect("localhost","root","","daw_sharing");
	$EquipatgeGran =Input::get('EquipatgeGran');
	$Fumar =Input::get('Fumar');
	$Animales =Input::get('Animales');
	$MenjarBeure =Input::get('MenjarBeure');
	$plazas =Input::get('plazas');
	$eurosplaza =Input::get('eurosplaza');
	$comentarios =Input::get('comentarios');
	$anterior=Input::get('anterior');
	$siguiente=Input::get('siguiente');
	
	if ($anterior){
		return View::make('index2');
	}
	else{
	
	mysqli_query($link,"INSERT INTO viajes (EquipatgeGran,Fumar,Animales,MenjarBeure,NumPlaces,Preu,Comentari) VALUES ('$EquipatgeGran','$Fumar','$Animales','$MenjarBeure','$plazas','$eurosplaza','$comentarios')");
	
	return View::make('misviajes');
	}
	}
	
	public function perfilp()
	{
	
	$link = mysqli_connect("localhost","root","","daw_sharing");
	
	
	
	return View::make('perfil');
	}
	
	public function misviajesm()
	{
	
	$link = mysqli_connect("localhost","root","","daw_sharing");
	
	
	
	return View::make('misviajes');
	}
}
