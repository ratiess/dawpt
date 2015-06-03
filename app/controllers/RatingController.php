<?php

class RatingController extends BaseController {

		public function rating2()
		{
			
			$id = $_GET['id'];

			if ($id!=null){
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/master
				$ejercicios= DB::table('ejercicios')->where('id', $id)->get();
				
				return json_encode(array('ejercicios' => $ejercicios));
				
			}else{
				$ejercicios= DB::table('ejercicios')->select('descripcion as label', 'id')->get();
				return json_encode($ejercicios);
<<<<<<< HEAD
=======
=======
				$acciones = DB::table('acciones')->where('id', $id)->get();
				//$acciones = DB::table('acciones')->where('id', $id)->pluck('id');

				$dietas = DB::table('dietas')->select('id', 'desc')->get();
				//return View::make('pages.rating', array('acciones' => $acciones));
				return json_encode(array('acciones' => $acciones));
				//return json_encode(array('dietas' => $dietas));
			}else{
				$acciones = DB::table('acciones')->select('*')->get();
				return json_encode(array('acciones' => $acciones));
>>>>>>> origin/master
>>>>>>> origin/master
			}
			
		}
  }