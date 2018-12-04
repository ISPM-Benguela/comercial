<?php

use Comercio\Categoria;
use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = array(
            array("nome" => "Calcados", "slug" => "calcados"),
            array('nome' => "Pastas", "slug" => "acessorios")
        );

        foreach($categorias as $caregoria)
        {
            Categoria::create($categoria);
        }
    }
}
