<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cruz de Ferro MC</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html, body {
            background-color: black;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            right: 10px;
            position: relative;
            top: 18px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 15px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>


</head>
<body>



<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links ">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a class=" d-md-none" href="{{ route('wellcome') }}">Home</a>
                <a class=" d-md-none" href="{{ route('sedes') }}">Sedes</a>
                <a class=" d-md-none" href="{{ route('eventos') }}">Eventos</a>
                <a class=" d-md-none" href="{{ route('historia') }}">História</a>
                <a class=" d-md-none" href="{{ route('calendario') }}">Calendário</a>
                <a class=" d-md-none" href="{{ route('lendarios') }}">Lendários</a>
                <a href="{{ route('login') }}">Login</a>

            @endauth
        </div>
    @endif

    <div class="container-fluid">


        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sede Nacional
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Ubatuba - SP</b></h2>
                            <p class="text-muted text-sm"><b>Presidente: </b>  Beto </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/beto1.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Taubaté - SP</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Diegão </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/diegao.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Cunha - SP</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Claudião </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/claudiao.png')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Caraguatatuba - SP</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Edilson </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/edilson.jpeg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>São José dos Campos - SP</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Jimmy </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/jimmy.jpeg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Jacareí - SP</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Pulguinha </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/pulguinha.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>São Paulo - SP</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Beto Amazonas </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Leme - SP</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Beto </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/betoleme2.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Serra Negra - SP</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Marcos Vinícios </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>S.J. Rio Preto - SP</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Chaim </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/chaim.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Goiânia - GO</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Oliveira </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Valparaíso - GO</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Gardenal </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Brasília - DF</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Alfredo </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Planaltina - GO</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Cientista </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Natal - RN</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b> Ziprex </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Belo Horizonte - MG</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Anderson </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/anderson.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Poços de Caldas - MG</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Joanilson </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Macaé - RJ</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Montenegro </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Rio das Ostras - RJ</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Miro </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>São Pedro da Aldeia - RJ</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Xegajunto </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Saquarema - RJ</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b> Konan </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Rio de Janeiro - RJ</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  7velas </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Angra dos Reis - RJ</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b> Dedé </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Curitiba - PR</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Empada </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Resende - RJ </b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Jorge Maluko </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/jorge.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Recife - PE</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b> Fumaça </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>João Pessoa - PB</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Ary </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Orizona - GO</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b> Tirulipa </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Baixada - RJ</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b> Taliban </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Formosa - GO</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Cientista </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch " style="margin-top: 30px">
            <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Sub-Sede
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <br>
                            <h2 class="lead"><b>Paraty - RJ</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b> Alf </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted"  style="list-style-type: none;">
                                <li class="small">Contato </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>(12) 99781-0515</li>
                            </ul>
                        </div>

                        <div class="col-5 text-center">
                            <img src="{{asset('imagens/avatar.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>


        </div>
    </div>





        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
