<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeTest extends TestCase
{
  		/** @test */
    function test_bienvenida_con_nickname(){
    	$this->get('saluda/yisus/crist')
    		 ->assertStatus(200)
        	 ->assertSee("hola Yisus, alias crist");
    }

    /** @test */
    function test_bienvenida_sin_nickname(){
    	$this->get('saluda/yisus')
    		 ->assertStatus(200)
        	 ->assertSee("hola Yisus, sin alias");
    }


}
