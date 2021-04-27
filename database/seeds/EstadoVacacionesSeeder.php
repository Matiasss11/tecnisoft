<?php

use Illuminate\Database\Seeder;
use App\EstadoVacacion;
class EstadoVacacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstadoVacacion::create([
            'nombre'         => 'Vigente',
            'descripcion'    => 'Actualmente en vacaciones'
        ]);
        EstadoVacacion::create([
            'nombre'         => 'No Vigente',
            'descripcion'    => 'Actualmente no está en vacaciones'
        ]);
        
    }
}
