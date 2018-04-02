<?php


//la primer ruta que coincida es la que va a usar
Route::get('/', function () {
    return view('welcome');
});
//cambiar funcion anonima por llamado al controlador y con arroba el metodo
Route::get('/usuarios','UserController@index') ;

Route::get('/usuarios/{id}','UserController@show')->where('id','[0-9]+');

Route::get('/saluda/{name}/{nickname?}','WelcomeUserController');

/*
Route::get('/usuarios', function () {
    return 'USUARIOS';
});

Route::get('/usuarios', function () {
    return 'USUARIOS';
});//->where('id','[0-9]+');//condicion solo reciba numeros en el objeto ,+ mas de un numero
//->where('id','/d+') igualmente valida solo nnumeros
//->where('id','/w+') valida letras

Route::get('/usuarios/{id}',function($id){ ///la funcion recibe parametro
	return "codigo: {$id}";
	//return 'id_user'.$id;   forma 2
	//return 'id_user'.$_GET['id'];   forma 3
});

Route::get('/saluda/{name}/{nickname?}', function ($name,$nickname=null) {//null valor por defecto, ? es opcional llenar
    $name=ucfirst($name);//volver la primer letra a mayuscula
    if($nickname){
    	return "hola {$name}, alias {$nickname}";
    }
    else{
    	return "hola {$name}, sin alias";
    }
});
*/
