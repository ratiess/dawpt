<?php

class InsertEjRutinasController extends BaseController {

		public function rating2()
		{
				$lastIdRutinas = DB::table('rutinas')->select('id')->max('id');
				$ejercicioId = DB::table('ejercicios')->select('id');

				$ej_rutinas = DB::table('ejercicios_rutinas')->insertGetId(
				    array('ejercicios_id' => , 'rutinas_id' =>$lastIdRutinas ,'series' => 10,'repeticiones' => ,'dias' =>) 
				);
			
		}
  }