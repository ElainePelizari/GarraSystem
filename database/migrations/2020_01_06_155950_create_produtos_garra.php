<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosGarra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos_garra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('tamanho');
            $table->string('tipo');
            $table->integer('quantidade');
            $table->string('cor');
            $table->double('preco');
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
        Schema::dropIfExists('produtos_garra');
    }
}
