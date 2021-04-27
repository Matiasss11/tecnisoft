<?php

use Illuminate\Database\Seeder;
use App\TipoContratacion;
class TipoContratacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoContratacion::create([
            'nombre'        =>  'Contrato por tiempo indeterminado',
            'descripcion'   =>  'No posee fecha de finalización.'
            ]);
        TipoContratacion::create([
            'nombre'        =>  'Contrato a plazo fijo',
            'descripcion'   =>  'Dura hasta el vencimiento del plazo convenido.'
            ]);
        TipoContratacion::create([
            'nombre'        =>  'Contrato a tiempo parcial',
            'descripcion'   =>  'La prestación de servicios no puede ser mayor a dos tercios de la jornada habitual de la actividad.'
            ]);
        TipoContratacion::create([
            'nombre'        =>  'Contrato de trabajo de temporada',
            'descripcion'   =>  'Por la naturaleza de la actividad, las tareas se desarrollan en determinadas épocas del año y se repiten anualmente.'
            ]);
        TipoContratacion::create([
            'nombre'        =>  'Contrato de trabajo eventual',
            'descripcion'   =>  'Se prestan servicios extraordinarios para resultados concretos.'
            ]);
        TipoContratacion::create([
            'nombre'        =>  'Contrato por equipo',
            'descripcion'   =>  'Se realiza entre un empleador y un grupo de empleados representado por uno de ellos.'
            ]);
        TipoContratacion::create([
            'nombre'        =>  'Personal de casas particulares',
            'descripcion'   =>  'Incluye tareas de limpieza, mantenimiento, asistencia personal y acompañamiento o cuidado no terapéutico.'
            ]);
        TipoContratacion::create([
            'nombre'        =>  'Contrato de aprendizaje',
            'descripcion'   =>  'Destinado a personas entre 16 y 28 años con una duración de entre 3 y 12 meses y una jornada máxima de 40 horas semanales.'
            ]);
    }
}
