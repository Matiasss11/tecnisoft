<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->id();
            $table->string('dni');
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_nacimiento');
            $table->string('telefono');
            $table->string('email');
            $table->string('fecha_alta');
            $table->string('cuil');
            $table->unsignedBigInteger('sexo_id');
            $table->foreign('sexo_id')->references('id')->on('sexos')->onDelete('restrict');
            $table->unsignedBigInteger('domicilio_id');
            $table->foreign('domicilio_id')->references('id')->on('domicilios')->onDelete('restrict');
            $table->unsignedBigInteger('estado_vacacion_id');
            $table->foreign('estado_vacacion_id')->references('id')->on('estado_vacaciones')->onDelete('restrict');
            $table->unsignedBigInteger('dias_correspondido_id');
            $table->foreign('dias_correspondido_id')->references('id')->on('dias_correspondidos')->onDelete('restrict');
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
        Schema::dropIfExists('personal');
    }
}

