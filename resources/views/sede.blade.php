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
        <h4>Cadastro de Sedes CF</h4>
        <hr>
        <a href="{{route('sede.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Cadastrar Nova Sede</a>
        <br>
        <div class="card mt-3" style="padding: 10px">
    <form>

        <select class="myselect" style="width: 100%" name="busca" id="busca">
            @forelse ($sede_total as $sede)
                <option value="{{$sede->id}}">{{$sede->sede}}</option>
                @empty
            @endforelse
            {{--@isset($busca)
                <option value="{{$sede->id}}"
                        selected>{{$sede->apelido.' - '.$sede->nome}}
                </option>
            @endisset--}}
        </select><br>

        <div class="row mb-3 mt-3">
            <div class="col-md-12">
                <button class="btn bg-gradient-primary mt-2" name="btnbuscar" id="btnbuscar" type="submit"><span
                        class="fas fa-search"></span> Buscar Sede
                </button>
            </div>

        </div>

    </form>

            <table class="table  table-striped">
                <tr>
                    <th>Código</th>
                    <th>Sede</th>
                    <th>Diretor</th>
                    <th>Ações</th>
                </tr>
                @forelse($sede_filtro as $sedeF)
                    <tr>
                        <td>{{$sedeF->id}}</td>
                        <td>{{$sedeF->sede}}</td>
                        <td>{{$sedeF->diretor}}</td>

                        <td>

                            <a href="{{ route('sede.edit', [$sedeF->id]) }}">
                                <button type="button" class="btn btn-warning btn-sm btn-circle"><span class="fas fa-eye"
                                                                                                      data-toggle="tooltip"
                                                                                                      data-placement="top"
                                                                                                      title="Visualizar"></span>
                                </button>
                            </a>
                             <form method="post" action="{{ route('sede.destroy', $sedeF->id) }}" style="display: inline; " onsubmit="return confirm('Deseja excluir este registro?');" >
                                  @method('DELETE')
                                  @csrf
                                  <input type="hidden" value="Delete" >
                                  <button class="btn btn-danger btn-sm"><span class="far fa-trash-alt" data-toggle="tooltip"
                                                                              data-placement="top"
                                                                              title="Apagar Registro"></span></button>

                            </form>
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
