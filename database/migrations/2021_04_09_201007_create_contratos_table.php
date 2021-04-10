<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_expiracion');
            $table->unsignedBigInteger('personal_id');
            $table->foreign('personal_id')->references('id')->on('personal')->onDelete('restrict');
            $table->unsignedBigInteger('tipo_contratacion_id');
            $table->foreign('tipo_contratacion_id')->references('id')->on('tipo_contrataciones')->onDelete('restrict');
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
        Schema::dropIfExists('contratos');
    }
}
