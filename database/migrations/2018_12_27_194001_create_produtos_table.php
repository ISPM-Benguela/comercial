<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_id')->unsigned();
            $table->integer('carousel_id')->unsigned()->nullable();
            $table->string('nome');
            $table->text('descricao');
            $table->string('imagem');
            $table->float('preco');
            $table->integer('stock');
            $table->boolean('promocao')->default(false);
            $table->float('novo_preco')->nullable();
            $table->string('inicio')->nullable();
            $table->string('fim')->nullable();
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('carousel_id')->references('id')->on('carousels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
