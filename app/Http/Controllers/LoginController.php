<?php

namespace App\Http\Controllers;

//use App\Http\Request;
use App\Http\Controllers\Controller;
use Request;
use Auth;

class LoginController extends Controller
{
    public function form(){
    	return view('form_login');
    }

    public function logar(){

    	$credenciais = Request::only('email','password');

    		if(Auth::attempt($credenciais)){
    			return 'usuario esta logado com sucesso';
    		}

    		return 'usuario nao existe';

    }
}
