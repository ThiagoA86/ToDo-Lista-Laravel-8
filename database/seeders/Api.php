<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Api extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'api_token'=>'12345',
            'name'=>'Thiago Alves',
            'email'=>'thiago.data_consult@hotmail.com',
            'password'=>'12345'

        ]);
    }
}
