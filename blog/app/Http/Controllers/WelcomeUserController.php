<?php

namespace Prueba\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    
    //public function index($name,$nickname=null){

	//invoke cuando solo tiene una lase no necesita llamar un metodo especifico
	public function __invoke($name,$nickname=null){
    	$name=ucfirst($name);//volver la primer letra a mayuscula
    if($nickname){
        return "hola {$name}, alias {$nickname}";
    }
    else{
        return "hola {$name}, sin alias";
    }
    }

}
