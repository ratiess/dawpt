<?php

class AlimentosController extends BaseController {

		public function rating2()
		{
			
			$id = $_GET['id'];

			if ($id!=null){
				$alimentos = DB::table('alimentos')->where('id', $id)->get();
			
				return json_encode(array('alimentos' => $alimentos));
				
			}else{
				$alimentos = DB::table('alimentos')->select('*')->get();
				return json_encode(array('alimentos' => $alimentos));
			}
			
		}
  }