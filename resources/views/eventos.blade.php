<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cruz de Ferro MC</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="css/lightGallery.css" />
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

    <style>

        #videos a {
            display: block;
            width: 25%;
            margin-bottom: 20px;
            box-sizing: border-box;
            padding: 0 10px;
            float: left;
            cursor: pointer;
            text-decoration: none;
            outline: 0;
        }

        #videos a:hover {
            opacity: 0.7;
        }

        #videos a img {
            width: 100%;
            height: auto;
        }

        #overlay {
            background: rgba(0,0,0,0.8);
            position:fixed;
            top: 0;
            right: 0;
            left:0;
            bottom: 0;
            width: 100%;
            height: 100%;
            z-index: 99999;
            display: none;
        }

        #overlay .modal {
            background: #fff;
            border-radius: 5px;
            width: 90%;
            margin: 100px auto;
            max-width: 800px;
            min-height: 100px;
            position: relative;
            padding: 30px 20px 15px;
        }

        #overlay .modal #close {
            position: absolute;
            top: 5px;
            right: 5px;
            cursor: pointer;
        }

        #overlay iframe {
            width: 100%;
        }
    </style>

    <style media="screen">
        .collapse-content .fa.fa-heart:hover {
            color: #f44336 !important;
        }
        .collapse-content .fa.fa-share-alt:hover {
            color: #0d47a1 !important;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .nav>li>a {
            color: white;
        }


        .nav-pills > li > a {
            background: black;  /* your preferred color */
        }

        .nav-pills > li > a.active {
            background-color: #1f1f2e !important;
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
        <br>
<div class="container">

    <ul class="nav nav-pills nav-fill mb-3 mt-4" id="pills-tab" role="tablist" style="padding-left: 10px; padding-right: 10px">
        <li class="nav-item" >
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Flyers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"> Media Vídeos</a>
        </li>

    </ul>
    <div class="tab-content" id="pills-tabContent" style="padding-left: 10px; padding-right: 10px">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row text-center">
                <div class="col-12">
                    <img src="imagens/flyer_cf2.jpeg" alt="thumbnail" class="img-thumbnail rounded center mt-3" style="width: 300px">
                </div>
            </div>
            <br>
            <div class="row text-center">
                <div class="col-12">
                    <img src="imagens/evento.jpg" alt="thumbnail" class="img-thumbnail rounded center mt-3" style="width: 300px">
                </div>
            </div>
            <br>
            <div class="row text-center">
                <div class="col-12">
                    <img src="imagens/flyer_cf.jpeg" alt="thumbnail" class="img-thumbnail rounded center mt-3" style="width: 300px">
                </div>
            </div>
            <br>
            <div class="row text-center">
                <div class="col-12">
                    <img src="imagens/pegada4.jpeg" alt="thumbnail" class="img-thumbnail rounded center mt-3" style="width: 300px">
                </div>
            </div>
            <br>
            <div class="row text-center">
                <div class="col-12">
                    <img src="imagens/pegada3.jpeg" alt="thumbnail" class="img-thumbnail rounded center mt-3" style="width: 300px">
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" style="padding-left: 15px; padding-right: 15px">

            <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container '><iframe src='https://www.youtube.com/embed//PHwVnYFbYK0' frameborder='0' allowfullscreen></iframe></div>  <p class="text-center mt-3">Scorpions - Wind of Change</p><br>

            <br>
            <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed//wAUx4T6IWNo' frameborder='0' allowfullscreen></iframe></div>  <p class="text-center mt-3"> CCR - Put a candle in the window</p><br>
        </div>

</div>
</div>








        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
