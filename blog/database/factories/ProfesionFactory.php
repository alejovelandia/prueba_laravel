<?php

use Faker\Generator as Faker;

$factory->define(Prueba\Profesione::class, function (Faker $faker) {
    return [
        //
        'titulo'=>$faker->sentence(3) //una sentencia ya que el titulo es una oracion // le paso el argumento de cuantas palabras debe tener
       // 'titulo'=>$faker->sentence(3,false)//le digo que sean exactamente de tres palabras no menos

        
        //'name' => $faker->name, de tipo nombre
        //'email' => $faker->unique()->safeEmail,//de tipo email y unico
        //'password' => , // secret
        //'remember_token' => str_random(10),//palabra sin sentido de diez letras
    ];
});
