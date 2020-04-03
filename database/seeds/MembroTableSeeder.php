<?php

use Illuminate\Database\Seeder;
use App\Membro;
class MembroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Membro::create(
            [
                'nome'      =>  'Teste',
                'apelido'      =>  'Careca',
                'padrinho'      =>  'Rafilsk',
                'ingresso'      =>  '2018-01-25',
                'sede'      =>  'Taubaté',
                'rg'      =>  '324257983',
                'cpf'      =>  '29997691806',
                'cnh'      =>  '324257983',
                'categoria_cnh'      =>  'AB',
                'vencimento_cnh'      =>  '2025-01-01',
                'nascimento'      =>  '1980-11-03',
                'naturalidade'      =>  'Pindamonhangaba',
                'endereco'      =>  'Rua Pedro Angelo Foroni, 283',
                'complemento'      =>  'casa',
                'bairro'      =>  'Cidade Jardim',
                'cidade'      =>  'Pindamonhangaba',
                'estado'      =>  'SP',
                'cep'      =>  '12424-290',
                'telefone'      =>  '126443019',
                'celular'      =>  '12991121729',
                'profissao'      =>  'Programador',
                'tipo_sanguineo'      =>  'O-',
                'estado_civil'      =>  'Solteiro',
                'meio_escudo'      =>  '2018-07-14',
                'escudo_fechado'      =>  '2019-07-14',
                'lendario'      =>  '2019-07-14',
                'data_afastamento1' =>  '2019-07-14',
                'data_afastamento2' =>  '2019-07-14',
                'data_afastamento3' =>  '2019-07-14',
                'afastamento1'      =>  'Teste de afastamento1',
                'afastamento2'      =>  'Teste de afastamento2',
                'afastamento3'      =>  'Teste de afastamento3',
                'punicao1'      =>  'Anotacao de punicao1',
                'punicao2'      =>  'Anotacao de punicao2',
                'punicao3'      =>  'Anotacao de punicao3',
                'anotacao'      =>  '2019-07-14',
                'cargo'      =>  'Membro',
                'email'     =>  'rodrigovc@gmail.com',
                'senha'  =>  bcrypt('123mudar'),
                'cargo'     =>  '4',

            ]
        );
    }
}
