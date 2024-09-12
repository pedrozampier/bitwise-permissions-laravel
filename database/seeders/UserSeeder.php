<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perfils')->insert([
            'id' => 1,
            'created_at' => now(),
            'nome' => 'Administrador',
            'cadastros' => 15,
            'atualizacoes' => 15,
        ]);

        DB::table('users')->insert([
            'id' => 1,
            'created_at' => now(),
            'name' => 'Administrador',
            'email' => 'teste@teste.com',
            'password' => bcrypt('password#123'),
            'perfil_id' => 1,
        ]);
    }
}
