<?php

class InsertRutinasController extends BaseController {

		public function rating2()
		{
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/master
				$desc= $_GET['descripcion'];
				$clase= $_GET['clase'];
				$user_id= $_GET['usuarios_id'];
						
				$rutinas = DB::table('rutinas')->insertGetId(
				    array('descripcion' => $desc, 'votos' => 0,'siguiendo' => 0,'clase' => $clase,'nota' => 0,'usuarios_id' =>$user_id)
				);
							
				$lastId = DB::table('rutinas')->select('id')->max('id');;
				return json_encode($lastId);
<<<<<<< HEAD
=======
=======
						
				$rutinas = DB::table('rutinas')->insertGetId(
				    array('descripcion' => 'prueba', 'votos' => 4,'siguiendo' => 10,'clase' => 'perder peso','nota' => 4,'usuarios_id' =>1)
				);
							
				$lastId = DB::table('rutinas')->select('id')->max('id');; //select del ultimo registro insertado en la tabla rutinas
				return json_encode(array('lastId' => $lastId));
>>>>>>> origin/master
>>>>>>> origin/master
			
		}
  }