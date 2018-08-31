<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\BD;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // $professions = DB::select('SELECT id FROM professions WHERE name = ?', ['Back-end developer']);
        // $professions = DB::table('professions')->select('id')->take(1)->get(); con take(1)->get() le decimos que coja el primero (indicamos cual quiere coger, take(1) y luego que lo coja get()). Esto lo podemos sustituir con first() que ejecuta todo esto con un solo comando.
        // > $profession = DB::table('professions')->select('id')->first();

        // También podemos usar condicionales
        // El condicional lo podemos pasar así : ->where('name', 'Back-end developer') Pero, si usamos whereName(), laravel entiende que Name es la columna dónde queremos buscar
        $professionId = DB::table('professions')
                      ->whereName('Back-end developer')
                      ->value('id');

        DB::table('users')->insert([
            'name' => 'Duilio Palacios',
            'email' => 'diulio@email.com',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId

       ]);
    }
}
