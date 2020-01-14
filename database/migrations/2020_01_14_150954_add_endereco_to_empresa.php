<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEnderecoToEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empresas', function (Blueprint $table) {
            $table->unsignedBigInteger('enderecos_id');
            $table->foreign('enderecos_id')->references('id')->on('enderecos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empresa', function (Blueprint $table) {
            //
        });
    }
}
