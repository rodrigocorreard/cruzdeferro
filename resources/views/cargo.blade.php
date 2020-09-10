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
        <h4>Cargos do Clube</h4>
        <hr>
        <a href="#{{--{{route('cargo.create')}}--}}" class="btn btn-success"><i class="fas fa-plus"></i> Novo Cadastro</a>
        <br>
        <div class="card mt-3" style="padding: 10px">
    {{--<form>

        <select class="myselect" style="width: 100%" name="busca" id="busca">
            @forelse ($cargo_total as $cargo)
                <option value="{{$cargo->id}}">{{$cargo->apelido.' - '.$cargo->nome}}</option>
                @empty
                <p>Nenhum registro encontrado</p>
            @endforelse
            @isset($busca)
                <option value="{{$cargo->id}}"
                        selected>{{$cargo->apelido.' - '.$cargo->nome}}
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

    </form>--}}

            <table class="table  table-striped">
                <tr>
                    <th>Código</th>
                    <th>Cargo</th>
                    <th>Nível</th>
                    <th>Ações</th>
                </tr>
                @forelse($cargo_total as $cargoF)
                    <tr>
                        <td>{{$cargoF->id}}</td>
                        <td>{{$cargoF->cargo}}</td>
                        <td>{{$cargoF->nivel}}</td>

                        <td>

                            <a href="#"> {{--{{ route('cargo.edit', [$cargoF->id]) }}--}}
                                <button type="button" class="btn btn-primary btn-sm btn-circle"><span class="fas fa-eye"
                                                                                                      data-toggle="tooltip"
                                                                                                      data-placement="top"
                                                                                                      title="Visualizar Dados"></span>
                                </button>
                            </a>
{{--                             <form method="post" action="{{ route('cargo.destroy', $cargoF->id) }}" style="display: inline; margin-left: 20px" onsubmit="return confirm('Deseja excluir este registro?');" >
                                  @method('DELETE')
                                  @csrf
                                  <input type="hidden" value="Delete" >
                                  <button class="btn btn-danger btn-sm"><span class="far fa-trash-alt"></span></button>
                            </form>--}}

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
