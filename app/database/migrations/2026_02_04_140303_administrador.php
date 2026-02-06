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
        //criando as colunas
        schema::create('administrador', function(Blueprint $table){
            $table->increments('id');
            $table->longtext('nomeAdministrador');
            $table->text('cpf');
            $table->date('dataNascimento');
            $table->text('telefone');
            $table->longtext('emailAdministrador');
            $table->longtext('senhaAdministrador');
            $table->date('dataCadastro');
            $table->enum('status', ['ativo', 'inativo'])->default('ativo');
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
        schema::dropIfExists('administrador');
    }
};