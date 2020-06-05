<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cruz de Ferro MC</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <style>

        body{
            margin-top:20px;
        }

        .align-center {
            text-align: center;
        }
        .hash-list {
            display: block;
            padding: 0;
            margin: 0 auto;
        }

        @media (min-width: 768px){
            .hash-list.cols-3 > li:nth-last-child(-n+3) {
                border-bottom: none;
            }
        }
        @media (min-width: 768px){
            .hash-list.cols-3 > li {
                width: 33.3333%;
            }
        }
        .hash-list > li {
            display: block;
            float: left;
            border-right: 1px solid rgba(0, 0, 0, 0.2);
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        }
        .pad-30, .pad-30-all > * {
            padding: 30px;
        }
        img {
            border: 0;
        }
        .mgb-20, .mgb-20-all > * {
            margin-bottom: 20px;
        }
        .wpx-100, .wpx-100-after:after {
            width: 100px;
        }
        .img-round, .img-rel-round {
            border-radius: 50%;
        }
        .padb-30, .padb-30-all > * {
            padding-bottom: 30px;
        }

        .mgb-40, .mgb-40-all > * {
            margin-bottom: 40px;
        }
        .align-center {
            text-align: center;
        }
        [class*="line-b"] {
            position: relative;
            padding-bottom: 20px;
            border-color: #E6AF2A;
        }
        .fg-text-d, .fg-hov-text-d:hover, .fg-active-text-d.active {
            color: white;
        }
        .font-cond-b {
            font-weight: 700 !important;
        }

    </style>

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


        <div class="container">
            <br><br>
            <ul class="hash-list cols-3 cols-1-xs pad-30-all align-center text-sm ">
                <div class="text-center">
                <li>
                    <img src="{{asset('imagens/beto1.jpg')}}" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Luiz Roberto Sant'anna de Paula (Beto)</h5>
                    <p >Data de Ingresso: Fundador</p>
                    <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Ubatuba - SP</small>
                </li>


                <li>
                    <hr>
                    <div style="margin-top: 40px">
                    <img src="{{asset('imagens/bodao1.jpg')}}" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Kleber Barozzi (Bodão)</h5>
                    <p >Data de Ingresso: 10/06/2002</p>
                    <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Taubaté - SP</small>
                    </div>
                </li>


                </div>
            </ul>
        </div>



</div>


</body>
</html>
