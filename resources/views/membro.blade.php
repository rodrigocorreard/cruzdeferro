{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Cruz de Ferro MC')

@section('content_header')

@stop

@section('content')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


    <div class="container-fluid">
        <h4>Ficha Cadastral de Membros</h4>
        <hr>
        <a href="{{route('membro.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Novo Cadastro</a>
        <br>
        <div class="card mt-3" style="padding: 10px">
    <form>

        <select class="myselect" style="width: 100%" name="busca" id="busca">
            @forelse ($membro_total as $membro)
                <option value="{{$membro->id}}">{{$membro->apelido.' - '.$membro->nome}}</option>
                @empty
                <p>Nenhum registro encontrado</p>
            @endforelse
            @isset($busca)
                <option value="{{$membro->id}}"
                        selected>{{$membro->apelido.' - '.$membro->nome}}
                </option>
            @endisset
        </select><br>

        <div class="row mb-3 mt-3">
            <div class="col-md-12">
                <button class="btn bg-gradient-primary mt-2" name="btnbuscar" id="btnbuscar" type="submit"><span
                        class="fas fa-search"></span> Buscar Cliente
                </button>
            </div>

        </div>

    </form>

            <table class="table  table-striped">
                <tr>
                    <th>Código</th>
                    <th>Apelido</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
                @forelse($membro_filtro as $membroF)
                    <tr>
                        <td>{{$membroF->id}}</td>
                        <td>{{$membroF->apelido}}</td>
                        <td>{{$membroF->nome}}</td>

                        <td>

                            <a href="{{ route('membro.edit', [$membroF->id]) }}">
                                <button type="button" class="btn btn-warning btn-sm btn-circle"><span class="fas fa-eye"
                                                                                                      data-toggle="tooltip"
                                                                                                      data-placement="top"
                                                                                                      title="Visualizar Dados"></span>
                                </button>
                            </a>
                             <form method="post" action="{{ route('membro.destroy', $membroF->id) }}" style="display: inline; " onsubmit="return confirm('Deseja excluir este registro?');" >
                                  @method('DELETE')
                                  @csrf
                                  <input type="hidden" value="Delete" >
                                  <button class="btn btn-danger btn-sm"><span class="far fa-trash-alt" data-toggle="tooltip"
                                                                              data-placement="top"
                                                                              title="Apagar Registro"></span></button>

                            </form>
                            <a href="{{ route('membro_pdf', $membroF->id) }}"><button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-print" data-toggle="tooltip"
                                                                                                                                        data-placement="top"
                                                                                                                                        title="Imprimir"></i></button> </a>
                        </td>
                    </tr>
                    @empty
                    <h5>Nenhum registro encontrado</h5>
                @endforelse
            </table>

        </div>

    </div>
    <script !src="">
        $(document).ready(function() {
            $('.myselect').select2({
                placeholder: 'Selecione o Cliente',
                minimumInputLength: 4,
                allowClear: true,
                language: "pt-BR"
            })
        });
    </script>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
{{--    <script> console.log('Hi!'); </script>--}}

@stop
