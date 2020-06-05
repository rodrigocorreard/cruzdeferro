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
                            <h2 class="lead"><b>Ubatuba</b></h2>
                            <p class="text-muted text-sm"><b>Presidente: </b>  Beto </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Endereço: Rua Adamastor da Silva, 123 - Centro </li>
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
                            <h2 class="lead"><b>Taubaté</b></h2>
                            <p class="text-muted text-sm"><b>Diretor: </b>  Diegão </p>
                            <ul class="ml-0 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>Av Agostinho Manfredine, 2848 - Pq Vera Cruz </li>
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

        </div>
    </div>





        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
