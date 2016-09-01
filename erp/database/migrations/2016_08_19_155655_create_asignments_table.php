<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignments', function (Blueprint $table){
            $table->increments('id');
            $table->boolean('status')->default('1');
            $table->timestamps();
        });
        //tabla pivot que relacione muchos a muchos
        //recomendacion para crear tablas de  muchos a muchos se usa el nombre de ambas tablas que se relacionaran pero en singular
        //articles y Tags = Article y tag = Article_tag
        /*Schema::create('user_type', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('type_id')->references('id')->on('types');

            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('asignments');
    }
}
