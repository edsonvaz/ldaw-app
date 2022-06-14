<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsistenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asistentes')->insert([
            'id_asistente' => 1,
            'nombres' => "Edson",
            'apellido' => "Vazquez Cruz",
            'edad' => 45,
            'celular' => "83365648100",
            'instituto' => "IDEK INC.",
            'correo_electronico' => "e9819@outlook.com",
            'estado_residencia' => "QRO"
        ]);
    }
}
