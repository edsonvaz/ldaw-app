<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metodos_pago')->insert([
            'id_categoria' => 1,
            'nombre' => "Efectivo",
            'descripcion' => "La persona pagó directamente al administrador",
            'codigo_comprobante' => "HSBC13791001"
        ]);
    }
}
