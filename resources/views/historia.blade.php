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


        <div class="container-fluid" style="margin-top: 30px">
            <div class="row text-center">
                <div class="col-12">
                    <img src="imagens/fundacao.jpg" alt="thumbnail" class="img-thumbnail rounded center" style="width: 300px">
                </div>
            </div>
        </div>




        <ul class="nav nav-pills nav-fill mb-3 mt-4" id="pills-tab" role="tablist" style="padding-left: 10px; padding-right: 10px">
            <li class="nav-item" >
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Fundação</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">A Lenda</a>
            </li>

        </ul>
        <div class="tab-content" id="pills-tabContent" style="padding-left: 10px; padding-right: 10px">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <p class="text-justify">Fundado em 29 de outubro de 1997 em Ubatuba, Litoral Norte de São Paulo, pelos senhores,
                    Luiz Roberto Sant'anna de Paula (<b>Beto</b>), Wander Rodrigues Alves (<b>Wander</b>) e Jorge Luiz Bedin (<b>Perna</b>).
                    É uma entidade de conotação motociclistica, sem fins lucrativos, destinada a ensinar aos seus integrantes a
                    prática do moto turismo, criando uma auto confiança nos motociclistas no que diz respeito a se aventurar nas
                    viagens, quer seja em grupo ou até mesmo sozinho, e a ter sempre o ideal companheirismo e
                    respeito pelos demais cidadãos.
                </p>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" style="padding-left: 15px; padding-right: 15px">
                <p class="text-justify" >
                    Foi em Cunha. Pouco distante daquela cidade, para os lados de Campos Novos, morava o Juca Mineiro, com sua adorável companheira, preocupado unicamente com o desenvolvimento do sítio. Enquanto isso, murmurava-se algo pelos arredores, sobre a graça e a beleza de Mariazinha que, alheia a tudo o que ocorria, avivava cada vez mais aquela paixão cabocla no íntimo do moço que a foi buscar na casa de sua madrinha nos arredores de Alfenas, numa noite de luar.
                    Mariazinha foi a primeira que notou a freqüente passagem de Basílio de Campos pelo sítio: ora, para ver o cafezal; ora para pedir uma caneca de água; e muitas - quantas! - sem um pretexto plausível, razoável. Notou, logo depois, o modo penetrante e interessado como era encarada pelo forasteiro, e pensamentos atordoantes passaram a povoar-lhe o cérebro até então casto e indiferente.
                    A má fama de Basílio era comentada, não só em Cunha como em toda a região do Vale do Paraíba, onde assinalava com proezas várias a sua passagem.
                    Isso veio oprimir ainda mais o coração da caboclinha amante e fiel ao companheiro. Por vezes abraçou Gregório, ou melhor, Gorinho. Beijava-lhe as faces acetinadas, vendo naquela criança o fruto de sua paixão pelo Juca. E quantas vezes este não a surpreendeu naquelas carícias, notando-lhe a mágoa que a pungia e o embaraço com que respondia às suas perguntas.
                    Um dia o mineiro voltou do campo e procurou Mariazinha por toda a casa. Entrou em indagações e espalhou emissários. Nada! Dias depois, um tropeiro vindo de Guaratinguetá informou ao inconsolável Juca que a vira cavalgando na garupa de tordilho de Basílio.
                    Pobre Juca! Daqueles tempos ditosos em que sua alma selvagem extasiava-se ante as carícias ingênuas da morena ingrata, nada mais lhe restava senão Gorinho, a lembrança querida a amargurar-lhe o coração ferido. Com o filho nos braços chorou, e depois procurou disfarçar sua dor, voltando-se atento e carinhoso à criança querida e ignorante. Sim, ignorante. Juca fez tudo para que Gorinho nunca viesse a saber quem fora sua mãe e como esta procedera.
                    De fato, aos doze anos, de sua mãe Gorinho sabia apenas que "tinha morrido", sem saber como e quando. Não a tinha conhecido, portanto não sentia sua falta, mas à sua morte atribuía a profunda tristeza que dominava seu pai.
                    Este, numa romaria à Basílica da Aparecida, deparou com a execrável presença de Basílio, que nele veio esbarrar, em nítida atitude de provocação. Levou a mão à cintura procurando a lâmina afiada que ali trazia, mas tremeu. A seu lado estava o filho querido. Se desferisse o golpe, daí em diante Gorinho seria apontado ao mesmo tempo, como filho de uma adúltera e de um assassino. Não! Gorinho havia de ignorar tudo!
                    Resolveu mudar-se para Ubatuba. Veio aqui, adquiriu um sítio. Voltou a Cunha, vendeu o de lá e partiu em companhia do filho. À beira-mar - pensou - viveria mais despreocupado, sem temer encontrar-se com Basílio, ou com algum indiscreto que revelasse a Gorinho o que este devia ignorar por toda a vida.
                    Ao chegar ao alto da serra, falou:
                    - Gorinho, vês aquele verde azulado lá em baixo? É o mar. Lá, às margens do oceano é que vamos morar. Lança um último olhar para estas regiões de Serra-acima e jura a teu pai que nunca mais passarás por este caminho. Juras?
                    - Mas, por que, meu pai?
                    - Não indagues, filho. Prometes que não mais transporás esta serra?
                    - Prometo, pai.

                    Juca Mineiro deu rédeas ao animal e começaram a descer silenciosamente. Em dado momento, cortando as conjeturas de Gorinho, surgiu por entre densas ramagens, numa curva do caminho, a figura de um homem irado, que bradou fortemente:
                    - Juca, você precisa morrer, desgraçado...
                    E, sem mais demora, desfechou-lhe a pequena distância um. tiro de garrucha.
                    Um grito doloroso e agudo partiu do coração de Gorinho, enquanto o miserável desaparecia no matagal da serra. Juca, ferido de morte, levou a mão crispada ao peito ensangüentado, tombando pesadamente do animal que cavalgava. Gorinho, lívido, alucinado, correu para o pai, não compreendendo o que se passava.

                    - Meu filho - falou o moribundo -, vais perder teu pai... não chores... antes, porém, vou contar-te... a minha... a nossa história... Com voz entrecortada narrou toda a infelicidade que pairou sobre ele com ingratidão de Mariazinha.
                    E terminou:
                    - Meu filho... um dia... vingarás teu pai... Deus te abençoe...
                    E expirou.
                    Gorinho plantou ali uma cruz tosca que depois foi substituída pela "grande Cruz de Ferro, negra e muda". Assinalou assim o lugar onde um dia viria trazer o testemunho de sua vindita.

                    Onze anos são passados. Gorinho é um belo rapaz de vinte e três anos, delicadamente moreno, cabelos pretos e ondulados, forte, alto, mas sempre cingido por uma nuvem de tristeza. A todo instante seu comportamento denunciava profundíssimo pesar.

                    Certo dia, numa fresca manhã de abril, deparando a figura odiada de Basílio num dos armazéns comerciais da Prainha, a idéia da vingança prometida ferveu-lhe no peito. Célere, partiu pela estrada do Mato Dentro, levando nos lábios um sorriso contrafeito. lá vingar o pai! Vingar!

                    Pouco antes da Cachoeira Grande, no pé da serra, sentou-se numa pedra para descansar um pouco. Basílio, no armazém, pedira pressa, para viajar ainda naquele dia, portanto não deveria demorar-se.

                    Gorinho, a qualquer rumor, escondia-se no denso matagal que beirava a estrada, espreitando, até que, na curva do caminho, surgiram algumas bestas trotando em direção a Serra-acima. Logo atrás vinha Basílio montado num cavalo baio, fumando despreocupadamente, esquecido talvez do hediondo crime que praticara, onze anos antes, um pouco mais adiante.

                    Gorinho estremeceu. Sacou de um punhal, saltou na estrada e gritou:
                    - Pára, miserável! Salta do cavalo!
                    - Que queres? Eu não trago dinheiro. Levo apenas minhas bestas, respondeu Basílio, deixando com moleza a sela, não reconhecendo no "ladrão" o filho de suas vítimas.
                    - Lembras-te de minha mãe?
                    - Tua mãe? Não sei, não. Quem era tua mãe?
                    - Tens razão, eu nunca tive mãe... Lembras-te da desgraçada que roubaste de meu pai?
                    - Ah! És tu, Gorinho? Mariazinha...
                    Basílio ainda quis falar mas uma lâmina fria varou-lhe o coração.

                    Gorinho, imperturbável, olhou o céu numa atitude de suplica e, lançando-se sobre o cadáver, com violência arrancou farrapos da camisa ensangüentada, montou no cavalo da própria vítima e partiu em disparada para a serra. Ao transpor a Volta Grande avistou a "cruz solitária e misteriosa". De um salto deixou a alimária e, correndo em sua direção, com os olhos rasos de lágrimas, falou baixinho:
                    - Pai! Estás vingado! Eis aqui ainda quente o sangue de quem te fez desgraçado...

                    E, como no cumprimento de um dever, depôs nos braços da Cruz de Ferro os farrapos ensangüentados. Osculou-a e ia retirar-se, quando observou viandantes que desciam, vencendo a longa caminhada, parecendo extasiados, na contemplação do maravilhoso cenário que dali se descortina. O rapaz tremeu. Estavam já a poucos passos. Rápido, volveu os olhos para a cruz onde pusera os farrapos ensangüentados.</p>

            </div>
        </div>
</div>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
