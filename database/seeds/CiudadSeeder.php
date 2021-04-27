<?php

use Illuminate\Database\Seeder;
use App\Ciudad;
class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciudad::create([
            'nombre'        =>  'Posadas',
            'codigo_postal' =>  '3300',
            'provincia_id' =>  '1' //Misiones
        ]);


        Ciudad::create([
            'nombre'        =>  'Obera',
            'codigo_postal' =>  '3400',
            'provincia_id' =>  '1' //Misiones
        ]);
    }
}
