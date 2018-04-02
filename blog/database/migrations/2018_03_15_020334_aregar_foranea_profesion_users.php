<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AregarForaneaProfesionUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::table('users', function (Blueprint $table) {
         $table->unsignedInteger('id_profesion')->nullable();
         $table->foreign('id_profesion')->references('id')->on('profesiones');
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::table('users', function (Blueprint $table) {
            //primero eliminar foranea antes que columna
            $table->deleteForeign(['id_profesion']);
            $table->dropColumn('id_profesion');


         });
    }
}
