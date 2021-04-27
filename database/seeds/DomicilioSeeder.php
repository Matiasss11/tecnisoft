<?php

use Illuminate\Database\Seeder;
use App\Domicilio;
class DomicilioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Domicilio::create([
            'altura'    =>  '15',
            'calle'     =>  'Blas Parera',
            'piso'      =>  '5',
            'ciudad_id' =>   1,
        ]);

        Domicilio::create([
            'altura'    =>  '230',
            'calle'     =>  'Tacuari',
            'piso'      =>  '2',
            'ciudad_id' =>   1,
        ]);

        Domicilio::create([
            'altura'    =>  '65',
            'calle'     =>  'Pellegrini',
            'piso'      =>  '19',
            'ciudad_id' =>   1,
        ]);
    }
}
