<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodoInscripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodo_inscripciones', function (Blueprint $table) {
            $table->id();
            $table->string('rango');
            $table->date('fecha_inscripcion_desde');
            $table->date('fecha_inscripcion_hasta');
            $table->date('fecha_vacacion_desde');
            $table->date('fecha_vacacion_hasta');
            $table->unsignedBigInteger('personal_id');
            $table->foreign('personal_id')->references('id')->on('personales')->onDelete('restrict');
            $table->unsignedBigInteger('periodo_vacacion_id');
            $table->foreign('periodo_vacacion_id')->references('id')->on('periodo_vacaciones')->onDelete('restrict');
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
        Schema::dropIfExists('periodo_inscripciones');
    }
}
