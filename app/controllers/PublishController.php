<?php

class PublishController extends BaseController {

		public function publish2()
		{
			
			$link = mysqli_connect("localhost","albert","12345aA","s2q33_daw-pt");
			$claseR = Input::get('claseR');
			$claseD = Input::get('claseD');
			$descR = Input::get('descR');
			$descD = Input::get('descD');
			$descAl = Input::get('descAl');
			$descAc = Input::get('descAc');
			$notaR = Input::get('notaR');
			$notaD = Input::get('notaD');
			$siguiendoR = Input::get('siguiendoR');
			$siguiendoD = Input::get('siguiendoD');
			$votosR = Input::get('votosR');
			$votosD = Input::get('votosD');
			$comida = Input::get('comida');
			$gramos = Input::get('gramos');
			$comida = Input::get('comida');
			$dias = Input::get('dias');
			$rep = Input::get('rep');
			$series = Input::get('series');
			
			$rutinas = DB::table('rutinas')->insertGetId(array('clase'=>$claseR, 'desc'=>$descR, 'nota'=>$notaR, 'siguiendo'=>$siguiendoR, 'votos'=>$votosR));
			$dietas = DB::table('dietas')->insertGetId(array('clase'=>$claseD, 'comida'=>$comida, 'desc'=>$descD,  'gramos'=>$gramos, 'nota'=>$notaD, 'siguiendo'=>$siguiendoD', votos'=>$votos));
			$alimentos = DB::table('alimentos')->insertGetId(array('cantidad'=>$cantidad, 'desc'=>$descAl));
			$acciones = DB::table('acciones')->insertGetId(array('desc'=>$descAc, 'dias'=>$dias, 'rep'=>$rep, 'series'=>$series));
	}
  }