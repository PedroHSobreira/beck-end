<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('endereco', function(Blueprint $table){
            $table->increments('id');
            $table->longtext('logradouro');
            $table->integer('numero');
            $table->longtext('complemento');
            $table->longtext('bairro');
            $table->text('cep');
            $table->longtext('cidade');
            $table->longtext('estado');
            $table->date('pais');
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
        //excluir caso exista
        schema::dropIfExists('endereco');

    }
};