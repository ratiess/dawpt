<?php

class InsertEjRutinaController extends BaseController {

		public function rating2()
		{
				$ej_id= $_GET['ejercicios_id'];
				$series = $_GET['series'];
				$repeticiones = $_GET['repeticiones'];
				$rutina_id = $_GET['rutina_id'];
						
				$ej_rutinas = DB::table('ejercicios_rutinas')->insertGetId(
				    array('ejercicios_id' => $ej_id, 'rutinas_id' =>$rutina_id ,'series' => $series,'repeticiones' => $repeticiones) 
				);
			
				
		}
  }