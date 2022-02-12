<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Categoria;

class Categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            "nome" => "Planos"
        ]);

        Categoria::create([
            "nome" => "Periféricos"
        ]);
    }
}
