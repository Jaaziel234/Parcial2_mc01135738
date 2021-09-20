<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('nota1',8,2);
            $table->decimal('nota2',8,2);
            $table->decimal('nota3',8,2);
            $table->decimal('nota4',8,2);
            $table->decimal('promedio',8,2);
            $table->decimal('parcial',8,2);

            $table->integer('profesor_id')->unsigned();
            $table->foreign('profesor_id')->references('id')->on('profesor');

            $table->integer('alumno_id')->unsigned();
            $table->foreign('alumno_id')->references('id')->on('alumnos');

            $table->integer('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
