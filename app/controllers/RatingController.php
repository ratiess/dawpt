<?php

class RatingController extends BaseController {

		public function rating2()
		{
			
		
			$acciones = DB::table('acciones')->select('id', 'desc')->get();
			$dietas = DB::table('dietas')->select('id', 'desc')->get();
			//return View::make('pages.rating', array('acciones' => $acciones));
			return json_encode(array('acciones' => $acciones));
			return json_encode(array('dietas' => $dietas));
		}
  }