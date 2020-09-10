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
        <div class="top-right links">
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

        <div class="container-fluid" style="margin-top: 30px">

            <div class="row text-center">
                <div class="col-12">
                    <img src="imagens/evento.jpg" alt="thumbnail" class="img-thumbnail rounded center mt-3" style="width: 300px">
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <img src="{{asset('imagens/pegada1.jpeg')}}" alt="thumbnail" class="img-thumbnail rounded center mt-3" style="width: 300px">
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <img src="imagens/pegada2.jpeg" alt="thumbnail" class="img-thumbnail rounded center mt-3" style="width: 300px">
                </div>
            </div>

        </div>
</div>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
