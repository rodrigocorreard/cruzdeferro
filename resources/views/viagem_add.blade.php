{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Cruz de Ferro MC')

@section('content_header')

@stop

@section('content')


    <div class="container-fluid">
        <h4>Cadastro de Viagens</h4>
        <hr>

        <div class="card mt-3" style="padding: 20px">
           <form method="POST" action="{{ route('viagem.store') }}" >
             @csrf
             @method('POST')

                <div class="row form-group">
                    <div class="col-md-6">
                        <label for="membro">Membro</label>
                        <select class="myselect" style="width: 100%" name="membro" id="membro">
                            @forelse($membro as $membro_total)
                                <option value="{{$membro_total->id}}">{{$membro_total->apelido}}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="graduacao">Graduação</label>
                        <select name="graduacao" id="graduacao" class="form-control form-group">
                            <option value="Próspero" selected>Próspero</option>
                            <option value="Meio Escudo">Meio Escudo</option>
                            <option value="Escudo Fechado">Escudo Fechado</option>
                            <option value="Lendário">Lendário</option>
                        </select>
                    </div>
                </div>
               <div class="row form-group">
                    <div class="col-md-4">
                        <label for="ida">Ida</label>
                        <input type="date" name="ida" id="ida" class="form-control"  >
                    </div>
                    <div class="col-md-4">
                        <label for="retorno">Retorno</label>
                        <input type="date" name="retorno" id="retorno" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="destino">Destino</label>
                        <input type="text" name="destino" id="destino" class="form-control">
                    </div>
                </div>
               <br>

                <div class="text-left">
                    <a href="{{ route('membro.index') }}" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Cancelar</a>
                    <button class="btn btn-success" type="submit"><i class="fas fa-check"></i> Gravar</button>
                </div>

            </form>
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
    {{--<script src="js/jquery.mask.min.js"></script>--}}
@stop
