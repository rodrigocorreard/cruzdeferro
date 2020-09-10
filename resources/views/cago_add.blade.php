{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Cruz de Ferro MC')

@section('content_header')

@stop

@section('content')


    <div class="container-fluid">
        <h4>Cadastro de Novo Membro</h4>
        <hr>

        <div class="card mt-3" style="padding: 10px">
           <form method="POST" action="{{ route('membro.store') }}" >
             @csrf
             @method('POST')

                <div class="row form-group">
                    <div class="col-md-3">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" required >
                    </div>
                    <div class="col-md-3">
                        <label for="apelido">Apelido</label>
                        <input type="text" name="apelido" id="apelido" class="form-control" required >
                    </div>
                    <div class="col-md-3">
                        <label for="padrinho">Padrinho</label>
                        <input type="text" name="padrinho" id="padrinho" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="ingresso">Data de Ingresso</label>
                        <input type="date" name="ingresso" id="ingresso" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3">
                        <label for="sede">Sede</label>
                        <select name="sede" id="sede" class="form-control form-group">
                            @forelse($sedes as $sede)
                                <option value="{{$sede->sede}}">{{$sede->sede}}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="rg">RG</label>
                        <input type="text" name="rg" id="rg" class="form-control" data-mask="99.999.999-9">
                    </div>
                    <div class="col-md-3">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" id="cpf" class="form-control" data-mask="999.999.999-99">
                    </div>
                    <div class="col-md-3">
                        <label for="cnh">CNH</label>
                        <input type="text" name="cnh" id="cnh" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3">
                        <label for="categoria_cnh">Categoria CNH</label>
                        <input type="text" name="categoria_cnh" id="categoria_cnh" class="form-control" >
                    </div>
                    <div class="col-md-3">
                        <label for="vencimento_cnh">Vencimento CNH</label>
                        <input type="date" name="vencimento_cnh" id="vencimento_cnh" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="naturalidade">Naturalidade</label>
                        <input type="text" name="naturalidade" id="naturalidade" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="nascimento">Nascimento</label>
                        <input type="date" name="nascimento" id="nascimento" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-3">
                        <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" id="endereco" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="complemento">Complemento</label>
                        <input type="text" name="complemento" id="complemento" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="bairro">Bairro</label>
                        <input type="text" name="bairro" id="bairro" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="cidade">Cidade</label>
                        <input type="text" name="cidade" id="cidade" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-3">
                        <label for="estado">Estado</label>
                        <select name="estado" id="estado" class="form-control form-group">
                            @forelse($estados as $estado)
                                <option value="{{$estado->sigla}}">{{$estado->sigla.' - '.$estado->descricao}}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="cep">CEP</label>
                        <input type="text" name="cep" id="cep" class="form-control" data-mask="99999-999">
                    </div>
                    <div class="col-md-3">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" id="telefone" class="form-control" data-mask="(99)9999-9999">
                    </div>
                    <div class="col-md-3">
                        <label for="celular">Celular</label>
                        <input type="text" name="celular" id="celular" class="form-control" data-mask="(99)99999-9999">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                        <label for="profissao">Profissão</label>
                        <input type="text" name="profissao" id="profissao" class="form-control">
                    </div>
                    <div class="col-md-1">
                        <label for="tipo_sanguineo">Tipo Sanguíneo</label>
                        <input type="text" name="tipo_sanguineo" id="tipo_sanguineo" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="estado_civil">Estado Civil</label>
                        <select name="estado_civil" id="estado_civil" class="form-control">
                            <option value="Solteiro">Solteiro</option>
                            <option value="Casado">Casado</option>
                            <option value="Divorciado">Divorciado</option>
                            <option value="Viúvo">Viúvo</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-3">
                        <label for="cargo">Cargo</label>
                        <select name="cargo" id="cargo" class="form-control form-group">
                            @forelse($cargos as $cargo)
                                <option value="{{$cargo->cargo}}">{{$cargo->cargo}}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="callout callout-warning">
                    <h5>Progressão de escudo e informações úteis</h5>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <label for="meio_escudo">Meio Escudo</label>
                        <input type="date" name="meio_escudo" id="meio_escudo" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="escudo_fechado">Escudo Fechado</label>
                        <input type="date" name="escudo_fechado" id="escudo_fechado" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="lendario">Lendário</label>
                        <input type="date" name="lendario" id="lendario" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <label for="afastamento1">Afastamento</label>
                        <input type="text" name="afastamento1" id="afastamento1" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="afastamento2">Afastamento</label>
                        <input type="text" name="afastamento2" id="afastamento2" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="afastamento3">Afastamento</label>
                        <input type="text" name="afastamento3" id="afastamento3" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <label for="punicao1">Punição</label>
                        <input type="text" name="punicao1" id="punicao1" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="punicao2">Punição</label>
                        <input type="text" name="punicao2" id="punicao2" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="punicao3">Punição</label>
                        <input type="text" name="punicao3" id="punicao3" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="anotacao">Anotação</label>
                        <textarea name="anotacao" id="anotacao" cols="30" rows="3" style="width: 100%"></textarea>
                    </div>

                </div>
                <div class="text-center">
                    <a href="{{ route('membro.index') }}" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Cancelar</a>
                    <button class="btn btn-success" type="submit"><i class="fas fa-check"></i> Gravar</button>
                </div>

            </form>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{--    <script> console.log('Hi!'); </script>--}}
    {{--<script src="js/jquery.mask.min.js"></script>--}}
@stop
