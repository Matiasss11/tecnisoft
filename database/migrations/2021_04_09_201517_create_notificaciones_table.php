<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->id();
            $table->string('mensaje');
            $table->date('visto');
            $table->unsignedBigInteger('personal_id');
            $table->foreign('personal_id')->references('id')->on('personales')->onDelete('restrict');
            $table->unsignedBigInteger('estado_lectura_id');
            $table->foreign('estado_lectura_id')->references('id')->on('estado_lecturas')->onDelete('restrict');
            $table->unsignedBigInteger('tipo_notificacion_id');
            $table->foreign('tipo_notificacion_id')->references('id')->on('tipo_notificaciones')->onDelete('restrict');
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
        Schema::dropIfExists('notificacions');
    }
}
