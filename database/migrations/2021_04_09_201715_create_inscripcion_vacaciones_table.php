<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionVacacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion_vacaciones', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_desde');
            $table->date('fecha_hasta');
            $table->unsignedBigInteger('estado_inscripcion_id');
            $table->foreign('estado_inscripcion_id')->references('id')->on('estado_inscripciones')->onDelete('restrict');
            $table->unsignedBigInteger('personal_id');
            $table->foreign('personal_id')->references('id')->on('personales')->onDelete('restrict');
            $table->unsignedBigInteger('periodo_inscripcion_id');
            $table->foreign('periodo_inscripcion_id')->references('id')->on('periodo_inscripciones')->onDelete('restrict');
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
        Schema::dropIfExists('inscripcion_vacaciones');
    }
}
