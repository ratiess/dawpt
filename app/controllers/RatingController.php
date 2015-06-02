<?php

class RatingController extends BaseController {

		public function rating2()
		{
			
			$id = $_GET['id'];

			if ($id!=null){
				$ejercicios= DB::table('ejercicios')->where('id', $id)->get();
				
				return json_encode(array('ejercicios' => $ejercicios));
				
			}else{
				$ejercicios= DB::table('ejercicios')->select('descripcion as label', 'id')->get();
				return json_encode($ejercicios);
			}
			
		}
  }