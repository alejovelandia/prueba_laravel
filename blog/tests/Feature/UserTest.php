<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example. //aqui agrega comentario
     *
     * @test//return void agregar anotacion con arroba
     */
    //se recomienda eliminar palabra public
    //public function
    function test_carga_pagina_usuarios_lista_llena()//documentar nombre para saber errores
    {
        $this->get('/usuarios')
        	 ->assertStatus(200)
        	 ->assertSee('listado de usuarios')
             ->assertSee('mateo')
             ->assertSee('marcos')
             ->assertSee('lucas')
             ->assertSee('juan');
    }
    /** @test */
    function test_carga_pagina_si_lista_vacia()
    {
        $this->get('/usuarios?empty')
             ->assertStatus(200)
             ->assertSee('No hay usuarios registrados.');
             
    }

    /** @test */
    function test_carga_pagina_datos_usuario(){
    	//$this->withoutExceptionHandling();//mostrar el error en el test
        
        $this->get('/usuarios/5')
    		 ->assertStatus(200)
        	 ->assertSee("codigo: 5");
    }
   
    /** @test */
     /*
    function test_carga_pagina_crear_usuario(){
    	$this->get('/usuarios/nuevo')
    		 ->assertStatus(200)
        	 ->assertSee("codigo: 5");
    }
    */
}
