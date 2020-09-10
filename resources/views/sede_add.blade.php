{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Cruz de Ferro MC')

@section('content_header')

@stop

@section('content')

    <div class="container-fluid">
        <h4>Cadastro de Nova Sede</h4>
        <hr>
        <div class="card mt-3" style="padding: 10px">
            <form method="POST" action="{{ route('sede.store') }}">
                @csrf
                @method('POST')
                <div class="row form-group">
                    <div class="col-md-6">
                        <label for="sede">Nome da nova Sede</label>
                        <input type="text" name="sede" id="sede" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="diretor">Nome do Diretor</label>
                        <input type="text" name="diretor" id="diretor" class="form-control" required>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('sede.index') }}" class="btn btn-warning"><i class="fas fa-arrow-left"></i>
                        Cancelar</a>
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
