<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        //Inserindo Perfis
        DB::table('perfils')->insert([
            'descricao_perfil' => 'Administrador',
            'descricao_perfil' => 'Usuario'
         ]);
        //Inserindo Primeiro Usuário
         DB::table('usuarios')->insert([
            'nome_usuario' => 'Clivia Bayum',
            'email_usuario' => 'clivia.bayum@gmail.com',
            "senha_usuario" =>  Hash::make('admin@123'),
            'perfil_id'=> 1,
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),

           ]);
    }
   
}
