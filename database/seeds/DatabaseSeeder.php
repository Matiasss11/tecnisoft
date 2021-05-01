<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SexoSeeder::class);
        $this->call(ProvinciaSeeder::class);
        $this->call(CiudadSeeder::class);
        $this->call(DomicilioSeeder::class);
        $this->call(TipoContratacionSeeder::class);
        $this->call(EstadoVacacionesSeeder::class);
        $this->call(DiasCorrespondidosSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
        $this->call(PermissionTableSeeder::class);

        

    }
}
