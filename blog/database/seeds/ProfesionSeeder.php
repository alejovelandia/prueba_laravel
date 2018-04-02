<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //import para poder usar DB sin toda la ruta

//use Prueba\Profesione as Profesion;  darle alias para usarlo
use Prueba\Profesione;


class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	//DB::insert('INSERT INTO profesiones (titulo) VALUES ("desarrollador web")');
    	//insertar datos con sql no con el constructor de consultas sql laravel

		//DB::insert('INSERT INTO profesiones (titulo) VALUES (?)',['desarrollador web']);
		//ENVIO LOS DATOS COMO PARAMETRO mediante laravel para evitar inyeccion sql

		//DB::insert('INSERT INTO profesiones (titulo) VALUES (:title)',[
		//	'title'=>'desarrollador web'
		//]);
		//lo añado utilizando una variable de sustitucion para manejar varios valores

    	 // DB::table('profesiones')->insert([
        //	'titulo'=>'desarrollador-web',

		Profesione::create(['titulo'=>'desarrollador-web',]);

		Profesione::create(['titulo'=>'desarrollador-frontend',]);

		Profesione::create(['titulo'=>'desarrollador-backend',]);

       factory(Profesione::class)->times(2)->create(); //times es para decir cuantos debe crear

        //DB::table('profesiones')->insert([
        //	'titulo'=>'diseñador-web',
        //]);
        //DB::table('profesiones')->insert([
        //	'titulo'=>'desarrollador-frontend',
        //]);
    }
}
