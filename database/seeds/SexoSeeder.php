<?php

use Illuminate\Database\Seeder;
use App\Sexo;
class SexoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sexo::create([
            'abreviatura'   =>  'M',
            'definicion'    =>  'masculino'
        ]);

        Sexo::create([
            'abreviatura'   =>  'F',
            'definicion'    =>  'femenino'
        ]);
    }
}
