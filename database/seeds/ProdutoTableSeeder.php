<?php

use Comcercio\Produto;
use Illuminate\Database\Seeder;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produtos = array(
            array('categoria_id' => 1, "slug" => "slug-1", "nome" => "sapato 1", "descricao" => "este e um bom sapata", "preco" => 150),
            array('categoria_id' => 2, "slug" => "slug-2", "nome" => "sapato 2", "descricao" => "este e um bom sapata", "preco" => 190),
        )
    }
}
