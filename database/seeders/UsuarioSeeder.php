<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'id_usuario' => 1,
            'id_rol' => 1,
            'nombre' => "Edson",
            'apellidos' => "Vazquez Cruz",
            'celular' => 83365648100,
            'correo_electronico' => "e9819@outlook.com",
            'password' => "Wuwuuwwuwu"
        ]);
    }
}
