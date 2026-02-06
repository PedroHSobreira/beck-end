
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
        //criando a table
        schema::create('turma', function(Blueprint $table){
            $table->increments('id');
            $table->longtext('codigoTurma');
            $table->date('dataInicio');
            $table->date('dataFim');
            $table->enum('status', ['ativo', 'inativo'])->default('ativo');
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
        schema::dropIfExists('turma');
    }
};
