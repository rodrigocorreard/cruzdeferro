{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Cruz de Ferro MC')

@section('content_header')

    {{-- CSS especifico da pagina. Exibe imagens de acordo com o tamanho da tela e aplica opacidade --}}
    <style>

        section {

            opacity:0.05;
            color: white;
            border-radius: 1em;
            padding: 1em;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%)
        }

        .desktop {
            display: block;
            /* ou inline, inline-block */
        }

        .mobile {
            display: none;
        }

        @media(max-width: 480px) {
            .desktop {
                display: none;
            }
            .mobile {
                display: block;
                /* ou inline, inline-block */
            }
        }
    </style>

@stop

@section('content')

    <section>

        <img class="d-none d-md-block" src="{{asset('cf36.png')}}"  width="400" height="400" alt="">
        <img class="mobile" src="{{asset('cf36.png')}}"   alt="">

    </section>

            <div class="col-md-3">
        <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Aniversariantes do Mês</h3>

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @foreach ( $aniversariantes as $aniversariante )
                        <span>{{$aniversariante->apelido}} - {{ date('d/m', strtotime($aniversariante->nascimento)) }}</span><br>
                    @endforeach
                </div>
                <!-- /.card-body -->
                </div>
                </div>




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
{{--    <script> console.log('Hi!'); </script>--}}
@stop
