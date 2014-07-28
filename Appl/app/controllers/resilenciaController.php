<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class resilenciaController extends BaseController {
    
public function postData(){
		$total =0;
		$valor =0;
		foreach ($_POST as $key => $value) {			
			$total += $value;			
		}
		
			if($total >=147) {
				$valor = "alto";
			}
			if($total <=146 && $total >= 121) {
				$valor = "medio";
			}
			if($total <=120) {
				$valor = "bajo";
			}
		
			
		return Redirect::to('resilencia')->with('valor', $valor, 'total', $total);	
	}
}