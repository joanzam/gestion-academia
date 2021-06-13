<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_instructors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('curso_id'); // Relación con cursos
            $table->foreign('curso_id')->references('cu_id')->on('cursos'); // clave foranea
            $table->unsignedInteger('instructor_id'); // Relación con instructores
            $table->foreign('instructor_id')->references('in_id')->on('instructores'); // clave foranea
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
        Schema::dropIfExists('curso_instructors');
    }
}
