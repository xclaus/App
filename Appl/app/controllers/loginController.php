<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
class loginController extends BaseController {
    
public function login(){
	
	$username = Input::get('username');
	$password = Input::get('password');
	

	if (Auth::attempt(['username' => $username, 'password' => $password])){
		
		//Actualizo el usuario a conectado
		DB::table('users')->where('rut', '=', Auth::user()->rut)
		->update(array('status' => 'ON'));
		
		return Redirect::to('main');
	} 
	
	return Redirect::to('/');		
	
}

public function logout(){
	if(Auth::check()) {
		Auth::logout();
		return Redirect::to('/');
	}
}

}