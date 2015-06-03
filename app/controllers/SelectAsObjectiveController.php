<?php

class SelectAsObjectiveController extends BaseController {

		public function objective2()
		{
			
			$clase = $_GET['clase'];			
			$nota= $_GET['nota'];
			
			
				$rutinas = DB::table('rutinas')->where('clase',$clase)->where('nota',$nota)->get();
				
				return json_encode($rutinas);			
			
			
		
		}
  }