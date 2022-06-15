<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => "Edson",
                'apellido' => "Vazquez",
                'celular' => "8336564810",
                'email' => "e9819@outlook.com",
                'password' => Hash::make("helloworld"),
                'created_at' => now()
            ],
            [
                'id' => 2,
                'name' => "Erick",
                'apellido' => "Avalos",
                'celular' => "4421234567",
                'email' => "eeavalosr@gmail.com",
                'password' => Hash::make("password"),
                'created_at' => now()
            ],
            [
                'id' => 3,
                'name' => "Yair",
                'apellido' => "Camacho",
                'celular' => "4420987654",
                'email' => "spambox.inbox@outlook.com",
                'password' => Hash::make("thisisnotatest"),
                'created_at' => now()
            ]
        ]);
    }
}
