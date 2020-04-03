<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $table        =   'membros';
    protected $primaryKey   =   'id';
    protected $guarded      =   [];
    //public $timestamps      =   false;
    /*protected $fillable = [

        'nome',
        'apelido',
        'padrinho',
        'ingresso',
        'sede',
        'rg',
        'cpf',
        'cnh',
        'categoria_cnh',
        'vencimento_cnh',
        'nascimento'    ,
        'naturalidade'  ,
        'endereco'      ,
        'complemento'   ,
        'bairro'      ,
        'cidade'      ,
        'estado'      ,
        'cep'      ,
        'telefone' ,
        'celular'  ,
        'profissao',
        'tipo_sanguineo',
        'estado_civil'  ,
        'meio_escudo'   ,
        'escudo_fechado',
        'lendario'      ,
        'data_afastamento1',
        'data_afastamento2',
        'data_afastamento3',
        'afastamento1'  ,
        'afastamento2'  ,
        'afastamento3'  ,
        'punicao1'      ,
        'punicao2'      ,
        'punicao3'      ,
        'anotacao'      ,
        'cargo'      ,
        'email'     ,
        'senha'  ,
        'cargo'  ,
        'created_at',
        'updated_at',
        'id',
    ];*/
}
