<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            AsistenteSeeder::class,
            CategoriaSeeder::class,
            MetodoPagoSeeder::class,
            PermisoSeeder::class,
            RolSeeder::class,
            UsuarioSeeder::class
        ]);
    }
}
