{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Cruz de Ferro MC')

@section('content_header')

    <style>
    @media (max-width: 480px) {

    /* mobile Table */
    .table-mobile {
    display: block;
    position: relative;
    width: 100%;
    }

    .table-mobile thead,
    .table-mobile tbody,
    .table-mobile th,
    .table-mobile td,
    .table-mobile tr {
    display: block;

    }
    .table-mobile td,
    .table-mobile th {
    height: 35px;
    }

    .table-mobile thead {
    float: left;
    }

    .table-mobile tbody {
    width: auto;
    position: relative;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    white-space: nowrap;
    }

    .table-mobile tbody tr {
    display: inline-block;
    }

    }
    </style>
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
        <h4>Controle de Viagens</h4>
        <hr>
        <a href="{{route('viagem.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Novo Cadastro</a>
        <br>
        <div class="card mt-3" style="padding: 10px">
    <form>

        <select class="myselect" style="width: 100%" name="busca" id="busca">
            @forelse ($viagem_total as $viagem)
                <option value="{{$viagem->id}}">{{$viagem->apelido.' - '.$viagem->nome}}</option>
                @empty
                <p>Nenhum registro encontrado</p>
            @endforelse
            {{--@isset($busca)
                <option value="{{$viagem->id}}"
                        selected>{{$viagem->apelido.' - '.$viagem->nome}}
                </option>
            @endisset--}}
        </select><br>

        <div class="row mb-3 mt-3">
            <div class="col-md-2">
                <button class="btn bg-gradient-primary mt-2" name="btnbuscar" id="btnbuscar" type="submit">
                    <span class="fas fa-search"></span> Buscar Viagem
                </button>
            </div>
            @isset($busca)
            <div class="col-md-3">
                    <a href="{{ route('viagem_pdf', $busca) }}">
                        <button type="button" class="btn btn-secondary mt-2">
                            <span class="fas fa-print"></span> Imprimir Viagens do Membro
                        </button>
                    </a>

            </div>
            @endisset

        </div>

    </form>

            <table class="table  table-striped table-mobile">
                <tr>
                    <th>Código</th>
                    <th>Graduação</th>
                    <th>Data</th>
                    <th>Retorno</th>
                    <th>Destino</th>
                    <th>Ações</th>
                </tr>
                @forelse($viagem_filtro as $viagemF)
                    <tr>
                        <td>{{ $viagemF->id }}</td>
                        <td>{{ $viagemF->graduacao }}</td>
                        <td>{{ date('d/m/Y', strtotime($viagemF->ida)) }}</td>
                        <td>{{ date('d/m/Y', strtotime($viagemF->retorno)) }}</td>
                        <td>{{ $viagemF->destino }}</td>

                        <td>

{{--                            <a href="{{ route('viagem.edit', [$viagemF->id]) }}">
                                <button type="button" class="btn btn-warning btn-sm btn-circle"><span class="fas fa-eye"
                                                                                                      data-toggle="tooltip"
                                                                                                      data-placement="top"
                                                                                                      title="Visualizar Dados"></span>
                                </button>
                            </a>--}}
                             <form method="post" action="{{ route('viagem.destroy', $viagemF->id) }}" style="display: inline; " onsubmit="return confirm('Deseja excluir este registro?');" >
                                  @method('DELETE')
                                  @csrf
                                  <input type="hidden" value="Delete" >
                                  <button class="btn btn-danger btn-sm"><span class="far fa-trash-alt" data-toggle="tooltip"
                                                                              data-placement="top"
                                                                              title="Apagar Registro"></span></button>

                            </form>
{{--                            <a href="{{ route('viagem_pdf', $viagemF->id) }}"><button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-print" data-toggle="tooltip"
                                                                                                                                        data-placement="top"
                                                                                                                                        title="Imprimir"></i></button>
                            </a>--}}
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
                minimumInputLength: 4,
                allowClear: false,
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
