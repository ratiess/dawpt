<?php

class RatingController extends BaseController {

		public function rating2()
		{
			
			$id = $_GET['id'];

			if ($id!=null){
				$acciones = DB::table('acciones')->where('id', $id)->get();
				//$acciones = DB::table('acciones')->where('id', $id)->pluck('id');

				$dietas = DB::table('dietas')->select('id', 'desc')->get();
				//return View::make('pages.rating', array('acciones' => $acciones));
				return json_encode(array('acciones' => $acciones));
				//return json_encode(array('dietas' => $dietas));
			}else{
				$acciones = DB::table('acciones')->select('*')->get();
				return json_encode(array('acciones' => $acciones));
			}
			
		}
  }