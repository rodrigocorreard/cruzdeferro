
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
            margin: 0;
            padding: 0;
            font-family: Helvetica, sans-serif;
        }
        body {
            background: #25303B;
        }
        section#timeline {
            width: 80%;
            margin: 20px auto;
            position: relative;
        }
        section#timeline:before {
            content: '';
            display: block;
            position: absolute;
            left: 50%;
            top: 0;
            margin: 0 0 0 -1px;
            width: 2px;
            height: 100%;
            background: rgba(255,255,255,0.2);
        }
        section#timeline article {
            width: 100%;
            margin: 0 0 20px 0;
            position: relative;
        }
        section#timeline article:after {
            content: '';
            display: block;
            clear: both;
        }
        section#timeline article div.inner {
            width: 40%;
            float: left;
            margin: 5px 0 0 0;
            border-radius: 6px;
        }
        section#timeline article div.inner span.date {
            display: block;
            width: 60px;
            height: 50px;
            padding: 5px 0;
            position: absolute;
            top: 0;
            left: 50%;
            margin: 0 0 0 -32px;
            border-radius: 100%;
            font-size: 12px;
            font-weight: 900;
            text-transform: uppercase;
            background: #25303B;
            color: rgba(255,255,255,0.5);
            border: 2px solid rgba(255,255,255,0.2);
            box-shadow: 0 0 0 7px #25303B;
        }
        section#timeline article div.inner span.date span {
            display: block;
            text-align: center;
        }
        section#timeline article div.inner span.date span.day {
            font-size: 10px;
        }
        section#timeline article div.inner span.date span.month {
            font-size: 18px;
        }
        section#timeline article div.inner span.date span.year {
            font-size: 10px;
        }
        section#timeline article div.inner h2 {
            padding: 15px;
            margin: 0;
            color: #fff;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: -1px;
            border-radius: 6px 6px 0 0;
            position: relative;
        }
        section#timeline article div.inner h2:after {
            content: '';
            position: absolute;
            top: 20px;
            right: -5px;
            width: 10px;
            height: 10px;
            -webkit-transform: rotate(-45deg);
        }
        section#timeline article div.inner p {
            padding: 15px;
            margin: 0;
            font-size: 14px;
            background: #fff;
            color: #656565;
            border-radius: 0 0 6px 6px;
        }
        section#timeline article:nth-child(2n+2) div.inner {
            float: right;
        }
        section#timeline article:nth-child(2n+2) div.inner h2:after {
            left: -5px;
        }
        section#timeline article:nth-child(1) div.inner h2 {
            background: #e74c3c;
        }
        section#timeline article:nth-child(1) div.inner h2:after {
            background: #e74c3c;
        }
        section#timeline article:nth-child(2) div.inner h2 {
            background: #2ecc71;
        }
        section#timeline article:nth-child(2) div.inner h2:after {
            background: #2ecc71;
        }
        section#timeline article:nth-child(3) div.inner h2 {
            background: #e67e22;
        }
        section#timeline article:nth-child(3) div.inner h2:after {
            background: #e67e22;
        }
        section#timeline article:nth-child(4) div.inner h2 {
            background: #1abc9c;
        }
        section#timeline article:nth-child(4) div.inner h2:after {
            background: #1abc9c;
        }
        section#timeline article:nth-child(5) div.inner h2 {
            background: #9b59b6;
        }
        section#timeline article:nth-child(5) div.inner h2:after {
            background: #9b59b6;
        }
    </style>

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

    <div class="container-fluid">

        <section id="timeline" style="margin-top: 40px">
            <article>
                <div class="inner">
      <span class="date">
        <span class="day">20<sup></sup></span>
        <span class="month">Jan</span>
        <span class="year">2020</span>
      </span>
                    <h2>Ubatuba</h2>
                    <p>Aniversário do Beto</p>
                </div>
            </article>
            <article>
                <div class="inner">
      <span class="date">
        <span class="day">13/14/15<sup></sup></span>
        <span class="month">Mar</span>
        <span class="year">2020</span>
      </span>
                    <h2>Recife</h2>
                    <p>Festa de Aniversário</p>
                </div>
            </article>
            <article>
                <div class="inner">
      <span class="date">
        <span class="day">20/21/22<sup></sup></span>
        <span class="month">Mar</span>
        <span class="year">2020</span>
      </span>
                    <h2>Rio das Ostras</h2>
                    <p>Festa de Aniversário</p>
                </div>
            </article>
            <article>
                <div class="inner">
      <span class="date">
        <span class="day">15/16/17<sup></sup></span>
        <span class="month">Mai</span>
        <span class="year">2020</span>
      </span>
                    <h2>Caraguá</h2>
                    <p>Festa de Aniversário</p>
                </div>
            </article>
            <article>
                <div class="inner">
      <span class="date">
        <span class="day">5/6/7<sup></sup></span>
        <span class="month">Jun</span>
        <span class="year">2020</span>
      </span>
                    <h2>Planaltina</h2>
                    <p>Festa de Aniversário</p>
                </div>
            </article>
            <article>
                <div class="inner">
      <span class="date">
        <span class="day">12/13/14<sup></sup></span>
        <span class="month">Jun</span>
        <span class="year">2020</span>
      </span>
                    <h2 style="background-color: orangered">São Paulo</h2>
                    <p>Festa de Aniversário</p>
                </div>
            </article>
            <article>
                <div class="inner">
      <span class="date">
        <span class="day">26/27/28<sup></sup></span>
        <span class="month">Jun</span>
        <span class="year">2020</span>
      </span>
                    <h2 style="background-color: yellowgreen">Taubaté</h2>
                    <p>7º MotoFest</p>
                </div>
            </article>
            <article>
                <div class="inner">
      <span class="date">
        <span class="day">01/02<sup></sup></span>
        <span class="month">Ago</span>
        <span class="year">2020</span>
      </span>
                    <h2 style="background-color: darkslateblue">Brasília</h2>
                    <p>Aniversário  MotoCapital</p>
                </div>
            </article>
            <article>
                <div class="inner">
      <span class="date">
        <span class="day">28/29/30<sup></sup></span>
        <span class="month">Ago</span>
        <span class="year">2020</span>
      </span>
                    <h2 style="background-color: forestgreen">SJ Rio Preto</h2>
                    <p>Festa de Aniversário</p>
                </div>
            </article>
            <article>
                <div class="inner">
      <span class="date">
        <span class="day">11/12/13<sup></sup></span>
        <span class="month">Set</span>
        <span class="year">2020</span>
      </span>
                    <h2 style="background-color: orange">Saquarema</h2>
                    <p>Festa de Aniversário</p>
                </div>
            </article>
            <article>
                <div class="inner">
      <span class="date">
        <span class="day">25/26/27<sup></sup></span>
        <span class="month">Set</span>
        <span class="year">2020</span>
      </span>
                    <h2 style="background-color: #ff5252">Belo Horizonte</h2>
                    <p>Festa de Aniversário</p>
                </div>
            </article>
        </section>



        </div>
    </div>





        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
