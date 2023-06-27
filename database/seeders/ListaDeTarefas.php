<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ListaDeTarefas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('listaDeTarefas')->insert([
            'texto'=>'Comprar Verduras',
            'autor'=>'Thiago Alves',
            'status'=>'Concluído',
            'created_at'=>date('Y-m-d h:i:s')
        ]);
        DB::table('listaDeTarefas')->insert([
            'texto'=>'Ver e-mail',
            'autor'=>'Thiago Alves',
            'status'=>'Pendente',
            'created_at'=>date('Y-m-d h:i:s')
        ]);
        DB::table('listaDeTarefas')->insert([
            'texto'=>'Pagar contas de Luz e Condominio',
            'autor'=>'Thiago Alves',
            'status'=>'Concluído',
            'created_at'=>date('Y-m-d h:i:s')
        ]);
    }
}
