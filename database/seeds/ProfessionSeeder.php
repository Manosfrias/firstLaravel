<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\BD;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        //el parámetro de sustitución de mysql es ? (sí, el símbolo de interrogación), pero cuando tenemos que usar muchos parámetros, utilizamos el nombre de la columna (p.e.: name), precedido de :

        DB::insert('INSERT INTO professions (name) VALUES (:name)', [
            'name' => 'Back-end developer'
        ]);



       // DB::table('professions')->insert([
       //      'name' => 'Back-end developer',
       // ]);
    }
}
