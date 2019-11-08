<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('alumno_id');
            $table->unsignedInteger('materia_id');
            $table->integer('nota');
            $table->date('fecha');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('materia_id')->references('id')->on('materias');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
