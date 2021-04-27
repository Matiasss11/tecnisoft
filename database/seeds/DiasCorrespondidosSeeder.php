<?php

use Illuminate\Database\Seeder;
use App\DiasCorrespondidos;
class DiasCorrespondidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DiasCorrespondidos::create([
            'año_desde'     =>  0,
            'año_hasta'     =>  5,
            'cantidad_dias' =>  14
            ]);

        DiasCorrespondidos::create([
            'año_desde'    =>   5,
            'año_hasta'    =>   10,
            'cantidad_dias' =>  21
            ]);

        DiasCorrespondidos::create([
            'año_desde'    =>   10,
            'año_hasta'    =>   20,
            'cantidad_dias' =>  28
            ]);

        DiasCorrespondidos::create([
            'año_desde'    =>   20,
            'año_hasta'    =>   null,
            'cantidad_dias' =>  35
            ]);
    }
}
