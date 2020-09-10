<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('apelido')->nullable();
            $table->string('padrinho')->nullable();
            $table->date('ingresso')->nullable();
            $table->string('sede')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->string('cnh')->nullable();
            $table->string('categoria_cnh')->nullable();
            $table->date('vencimento_cnh')->nullable();
            $table->date('nascimento')->nullable();
            $table->string('naturalidade')->nullable();
            $table->string('endereco')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('cep')->nullable();
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->string('profissao')->nullable();
            $table->string('tipo_sanguineo')->nullable();
            $table->string('estado_civil')->nullable();
            $table->date('meio_escudo')->nullable();
            $table->date('escudo_fechado')->nullable();
            $table->date('lendario')->nullable();
            $table->date('data_afastamento1')->nullable();
            $table->date('data_afastamento2')->nullable();
            $table->date('data_afastamento3')->nullable();
            $table->string('afastamento1')->nullable();
            $table->string('afastamento2')->nullable();
            $table->string('afastamento3')->nullable();
            $table->string('punicao1')->nullable();
            $table->string('punicao2')->nullable();
            $table->string('punicao3')->nullable();
            $table->mediumtext('anotacao')->nullable();
            $table->string('email')->unique();
            $table->string('senha');
            $table->string('cargo');
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
        Schema::dropIfExists('membros');
    }
}
