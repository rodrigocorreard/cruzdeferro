<!doctype html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ficha Cadastral</title>


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
            font-size: small;

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
            {{--    <img src="{{asset ('storage/cf36.png')}}" alt="">--}}
            <br>
            <h2>Ficha Cadastral</h2>
            <h3>Cruz de Ferro Moto Clube</h3>
        </div>
    </div>
</div>

<div id="content">

    <br>

    <div class="row">
        <div class="column"><p>Apelido: {{$usuario->apelido}}</p></div>
        <div class="column"><p>Padrinho: {{$usuario->padrinho}}</p></div>
    </div>
    <div class="row">
    @if ($usuario->ingresso !== null)
    <div class="column"><p>Data do Ingresso: {{ date("d/m/Y", strtotime($usuario->ingresso))}}</p></div>
    @else
    <div class="column"><p>Data do Ingresso: __/__/____</p></div>
    @endif
        
    <div class="column"><p>Sub Sede: {{$usuario->sede}}</p></div>
    </div>
    <hr>
    <h4>Dados Pessoais</h4>
    <hr>
    <div class="row">
        <div class="column"><p>Nome: {{$usuario->nome}}</p></div>
        <div class="column"><p>RG: {{$usuario->rg}}</p></div>
    </div>
    <div class="row">
        <div class="column"><p>CPF/MF nº: {{$usuario->cpf}}</p></div>
        <div class="column"><p>CNH: {{$usuario->cnh}}</p></div>
    </div>
    <div class="row">
        <div class="column"><p>Categoria CNH: {{$usuario->categoria_cnh}}</p></div>
        <div class="column"><p>Vencimento CNH: {{date("d/m/Y", strtotime($usuario->vencimento_cnh))}}</p></div>
    </div>
    <div class="row">
    @if ($usuario->nascimento !== null)
    <div class="column"><p>Data Nascimento: {{date("d/m/Y", strtotime($usuario->nascimento))}}</p></div>
    @else
    <div class="column"><p>Data Nascimento: __/__/____ </p></div>
    @endif
        
        <div class="column"><p>Naturalidade: {{$usuario->naturalidade}}</p></div>
    </div>
    <div class="row">
        <div class="column"><p>Endereço: {{$usuario->endereco}}</p></div>
        <div class="column"><p>Complemento: {{$usuario->complemento}}</p></div>
    </div>
    <div class="row">
        <div class="column"><p>Bairro: {{$usuario->bairro}}</p></div>
        <div class="column"><p>Cidade: {{$usuario->cidade}}</p></div>
    </div>
    <div class="row">
        <div class="column"><p>Estado: {{$usuario->estado}}</p></div>
        <div class="column"><p>CEP: {{$usuario->cep}}</p></div>
    </div>
    <div class="row">
        <div class="column"><p>Telefone: {{$usuario->telefone}}</p></div>
        <div class="column"><p>Celular: {{$usuario->celular}}</p></div>
    </div>
    <div class="row">
        <div class="column"><p>Email: {{$usuario->email}}</p></div>
        <div class="column"><p>Atividade Profissional: {{$usuario->profissao}}</p></div>
    </div>
    <div class="row">
        <div class="column"><p>Tipo Sanguíneo: {{$usuario->tipo_sanguineo}}</p></div>
        <div class="column"><p>Estado Civil: {{$usuario->estado_civil}}</p></div>
    </div>
    <br><br>
    <hr>
    <h4 style="justify-content: center">Histórico do Integrante no Clube</h4>
    <hr>
    <br>
    <h5>Progresso da Graduação:</h5>
    
    @if ($usuario->meio_escudo !== null)
        <p> Meio Escudo: {{date("d/m/Y", strtotime($usuario->meio_escudo))}}</p>
    @else
        <p> Meio Escudo: __/__/____</p>
    @endif

    @if ($usuario->escudo_fechado !== null)
    <p>Escudo Fechado: {{date("d/m/Y", strtotime($usuario->escudo_fechado))}}</p>
    @else
        <p> Escudo Fechado: __/__/____</p>
    @endif

    @if ($usuario->lendario !== null)
    <p> Lendário: {{date("d/m/Y", strtotime($usuario->lendario))}}</p>
    @else
        <p> Lendário: __/__/____</p>
    @endif
 
    <br>
    <h5>Afastamentos:</h5>

    @if ($usuario->data_afastamento1 !== null)
    <p>De {{date("d/m/Y", strtotime($usuario->data_afastamento1))}} Motivo:{{ ' '.$usuario->afastamento1}}</p>
    @else
    <p>De __/__/____ Motivo:{{ ' '.$usuario->afastamento1}}</p>
    @endif

    @if ($usuario->data_afastamento2 !== null)
    <p>De {{date("d/m/Y", strtotime($usuario->data_afastamento2))}} Motivo:{{ ' '.$usuario->afastamento2}}</p>
    @else
    <p>De __/__/____ Motivo:{{ ' '.$usuario->afastamento2}}</p>
    @endif

    @if ($usuario->data_afastamento3 !== null)
    <p>De {{date("d/m/Y", strtotime($usuario->data_afastamento3))}} Motivo:{{ ' '.$usuario->afastamento3}}</p>
    @else
    <p>De __/__/____ Motivo:{{ ' '.$usuario->afastamento3}}</p>
    @endif

    <br>
    <h4>Anotações Gerais:</h4>
    <p>{{$usuario->anotacao}}</p>
    <br>
    <br>
    <p style="line-height: 20px;">Declaro para todos os fins que recebi uma cópia e estou ciente do ESTATUTO e do REGIME
        INTERNO DISCIPLINAR do CRUZ
        DE FERRO MOTO CLUBE, comprometendo-me a cumprir fielmente todos os seus termos.</p>
    <br><br>
    <p>Taubaté,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; de &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        de</p>
    <br><br>

    <p>_________________________________________________________________</p>
    <p>Nome:</p>


</div>
<footer>

</footer>
<div id="footer">

</div>
{{--<div style = "display:block; clear:both; page-break-after:always;"></div> //quebra de pagina pdf --}}


</body>
</html>
