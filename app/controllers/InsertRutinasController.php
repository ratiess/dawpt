<?php

class InsertRutinasController extends BaseController {

		public function rating2()
		{
				$desc= $_GET['descripcion'];
				$clase= $_GET['clase'];
				$user_id= $_GET['usuarios_id'];
						
				$rutinas = DB::table('rutinas')->insertGetId(
				    array('descripcion' => $desc, 'votos' => 0,'siguiendo' => 0,'clase' => $clase,'nota' => 0,'usuarios_id' =>$user_id)
				);
							
				$lastId = DB::table('rutinas')->select('id')->max('id');;
				return json_encode($lastId);
			
		}
  }