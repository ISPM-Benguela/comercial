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
            $table->integer('categoria_id');
            $table->string('slug');
            $table->string('nome');
            $table->text('descricao');
            $table->decimal('preco', 18, 9)->nullable();
            $table->integer('stock');
            $table->boolean('promocao')->defualt(false);
            $table->decimal('novo_preco')->default('0.00');
            $table->timestamps();
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
