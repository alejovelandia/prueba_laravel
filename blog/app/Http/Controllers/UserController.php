<?php

namespace Prueba\Http\Controllers;
use Prueba\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//para poder usar db para construir consultas

class UserController extends Controller
{
    //ALEJANDRO ES GAY

    /*public function index(){
    	return 'USUARIOS';
    }*/
    public function index(){

        $users=User::all();//al utilizar eloquent retorna una coleccion de suer con caracteristics diferentes
       // $users=DB::table('users')->get();

    	// if(request()->has('empty')){
    	// 	$users=[];
    	// }else{ 
    	// 	$users=['mateo','marcos','lucas','juan',];
    	// }

    	
    	$title='listado de usuarios';
    	//<script>alert("clicker")</script>	

    	/*return view('users',['users'=>$users,
    		'title'=>'listado de usuarios']);*/
    	/*return view('users')
    	->with('users',$users)
    	->with('title','listado de usuarios');*/

    	//dd(compact('title','users')); poder ver e ejecucion que lleva el compact antes llamado var_dump
    	return view('users.index',compact('title','users'));
    	//compact devuelve un array aociativo


    }


    public function show($id){
        return view('users.show',compact('id'));
    	//return "codigo: {$id}";
    }

   /* public function create($id){
    	return "codigo: {$id}";
    }*/

     
}
