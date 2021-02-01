<!doctype html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Viagens</title>


    <style>
        /*        @page { margin: 80px 25px; }
                #header { position: fixed; left: 0px; top: -70px; right: 0px; height: 25px; text-align: left; }
                #footer { position: fixed; left: 0px; bottom: -30px; right: 0px; height: 25px; text-align: left; }
                #footer .page:after { content: counter(page, decimal); }*/
        html {
            font-family: 'helvetica neue', helvetica, arial, sans-serif;
            line-height: 5px;
        }

        table {
            width: 100%;
        }

        th {
            height: 25px;
            text-align: left;
            padding: 15px;

        }

        tr {
            font-size: medium;
            height: 25px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .row {
            display: flex;

        }

        .column {
            float: left;
            width: 50%;
        }



    </style>
</head>
<body>

<div id="header">
    <div class="row">
        <div class="coluymn">
            <br>
            <h2>Controle de Viagens</h2>
            <h3>Cruz de Ferro Moto Clube</h3>
        </div>
    </div>
</div>

<div id="content">

    <br>

    <div class="row">
        <div class="column"><b><p>Apelido: {{$usuario->apelido}}</p></b></div>
        <div class="column"><b><p>Padrinho: {{$usuario->padrinho}}</p></b></div>
    </div>

    <table class="table  table-striped">
        <tr>
            <th>Código</th>
            <th>Graduação</th>
            <th>Data</th>
            <th>Retorno</th>
            <th>Destino</th>
        </tr>
        @forelse($viagem as $viagemF)
            <tr>
                <td>{{ $viagemF->id }}</td>
                <td>{{ $viagemF->graduacao }}</td>

                @if ($viagemF->ida !== null)
                    <td>{{ date('d/m/Y', strtotime($viagemF->ida)) }}</td>
                @else
                    <td> 0/00/0000</td>
                @endif

                @if ($viagemF->retorno !== null)
                    <td>{{ date('d/m/Y', strtotime($viagemF->retorno)) }}</td>
                @else
                    <td> 0/00/0000</td>
                @endif

                <td>{{ $viagemF->destino }}</td>

                <td>
                </td>
            </tr>
        @empty
            <h5>Nenhum registro encontrado</h5>
        @endforelse
    </table>




</div>
<footer>

</footer>

{{--<div style = "display:block; clear:both; page-break-after:always;"></div>--}}



</body>
</html>
