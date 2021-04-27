<?php

use Illuminate\Database\Seeder;
use App\Provincia;
class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provincia::create([
            'nombre'    =>  'Misiones'
        ]);

        Provincia::create([
            'nombre'    =>  'Corrientes'
        ]);

        Provincia::create([
            'nombre'    =>  'Entre Rios'
        ]);
    }
}
