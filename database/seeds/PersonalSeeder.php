<?php

use Illuminate\Database\Seeder;
use App\Personal;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personal::create([
            'dni'                   => '37590136',
            'nombre'                => 'Carlos Lisandro',
            'apellido'              => 'Villalba',
            'fecha_nacimiento'      => '1993-09-14',
            'telefono'              => '3764660653',
            'email'                 => 'elcarlosvillalba@gmail.com',
            'fecha_alta'            => '2007-05-05',
            'cuil'                  => '22-1231231-11',
            'sexo_id'               => 1,
            'domicilio_id'          => 1,
            'estado_vacacion_id'    => 1,
            'estado_vacacion_id'    => 1,
            'dias_correspondido_id' => 1
        ]);
    }
}
