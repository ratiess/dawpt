<?php

class InsertRutinasController extends BaseController {

		public function rating2()
		{
						
				$rutinas = DB::table('rutinas')->insertGetId(
				    array('descripcion' => 'prueba', 'votos' => 4,'siguiendo' => 10,'clase' => 'perder peso','nota' => 4,'usuarios_id' =>1)
				);
							
				$lastId = DB::table('rutinas')->select('id')->max('id');; //select del ultimo registro insertado en la tabla rutinas
				return json_encode(array('lastId' => $lastId));
			
		}
  }