<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
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
       Model::unguard();
       $this->call(ListaDeTarefas::class);
       $this->command->info(
        'Tarefas Adicionadas com sucesso na tabela ListaDeTarefas');
        Model::reguard();



    }
}
