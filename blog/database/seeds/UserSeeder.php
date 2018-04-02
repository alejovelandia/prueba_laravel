<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Prueba\User;
use Prueba\Profesione;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	//$profession=DB::select('SELECT id FROM profesiones WHERE titulo="desarrollador-web"');
    	//$profession=DB::select('SELECT id FROM profesiones WHERE titulo=?',['desarrollador-web']);//de forma segura

    	//$profession=DB::select('SELECT id FROM profesiones LIMIT 0,1');//PARA OBTENER UN VALOR SIN SABER NOMBRES

    	//$profession=DB::table('profesiones')->select('id')->take(1)->get();
    	//con el constructor de laravel, usa el metodo colections para encapsular aarys, pero es un objeto que tiene mas funcionalidades
    	//take es un limit  y get ppara obtener el valor

    	/*$professionId=DB::table('profesiones')
    	//->select('id','titulo')
    	->where(['titulo'=>'desarrollador-web'])
    	->value('id');//en lugar de//->first();*/
    	$professionId=Profesione::where(['titulo'=>'desarrollador-web'])->value('id');

    	//si no uso select retorna todas las columnas, puedo omitir el = del where ya lo reconoce, puedo pasar los datos del where como array si son varios

    	//dd($profession[0]-id);  //para ver que trae la variable ne consola

        /*DB::table('users')->insert([
        	'name'=>'alejin pinguin',
        	'email'=>'alejo@example.com',
        	'password'=>bcrypt('1234'),//encriptar contraseña
        	//'id_profesion'=>$profession[0]->id,//en la casilla 0 el parametro recojido se llama id
        	//'id_profesion'=>$professionId,// obtenerlo con parametros de laravel
        	'id_profesion'=>DB::table('profesiones')->whereTitulo('desarrollador-web')->value('id')
        	//meotod optimizado whereTitulo es un metodo magico reconoce la columna titulo

        ]);*/

        //puedo suar factory y reescribir todo lo que quiera
  		User::create([
        	'name'=>'alejin pinguin',
        	'email'=>'alejo@example.com',
        	'password'=>bcrypt('1234'),
        	'id_profesion'=>$professionId,
        	'is_admin'=>true
        	
        ]);

        factory(User::class)->create([//FUNCION para crear registros con valores aleatorios

        	'id_profesion'=>$professionId//quiero un dato en especifico se lo agrego lo demas es random

        ]);

        factory(User::class)->create();
        //factory(User::class, 50)->create();   // carga 50 usuarios , la cantidad  que necesite

       

        //  User::create([
        // 	'name'=>'otro usuario',
        // 	'email'=>'otro@example.com',
        // 	'password'=>bcrypt('1234'),
        // 	'id_profesion'=>$professionId
        	
        // ]);

        //  User::create([
        // 	'name'=>'otro 2',
        // 	'email'=>'otro2@example.com',
        // 	'password'=>bcrypt('1234'),
        // 	'id_profesion'=>null
        	
        // ]);
    }
}
