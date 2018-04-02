<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//ya que funciona para eliminar varias tablas se puede dejar en el seed general
    	//EN UNA FUNCION APARTE QUE RECIBE EL NOMBRE DE LA TABLA A TRUNCAR
    	$this->truncateTables([
    		'users',
    		'profesiones'
    	]);
    	
        // $this->call(UsersTableSeeder::class);
        $this->call(ProfesionSeeder::class);
        $this->call(UserSeeder::class);
    }

    protected function truncateTables(array $tables){

    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;');///Ssentencia sql para qe no valide llaves foraneas y poder truncar

    	foreach ($tables as $table) {
    		DB::table($table)->truncate();

    		//vaciar la tabla antes de agregar para evitar errores, no puedo truncar si hay foraneas
    	}
    	

    	DB::statement('SET FOREIGN_KEY_CHECKS = 1;');//reactivar revision despues de eliminar

    }
}
