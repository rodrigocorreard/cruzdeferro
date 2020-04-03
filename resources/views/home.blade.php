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



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
{{--    <script> console.log('Hi!'); </script>--}}
@stop
