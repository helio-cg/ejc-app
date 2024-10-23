<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EJC - 2024</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Roboto", sans-serif;
                font-style: normal;
            }


         table {
            width: 700px; /* Largura da tabela em pixels */
            border-collapse: collapse; /* Para que as bordas se unam */
        }
            .alinhamento {
                position: relative;
                height: 100px; /* Defina uma altura para a célula */
                text-align: right;
            }
            .alinhamento img {
                position: absolute;
                top: 0;
                right: 0;
            }

            p {
                margin: 4px 0; /* Margem superior e inferior de 5 pixels */
            }


        </style>
    </head>
    <body>


    <table>
        <tr>
            <td style="left: 0; right: 10;">
                <img src="./img/logo/logo.png" style="width: 50px; height: 100px;">
            </td>
            <td>
                <div style="text-align: center;">
                    <p style="font-size: 24px;"><b>ENCONTRO DE JOVENS COM CRISTO - EJC</b></p>
                    <p><b>PARÓQUIA DE N. SRA. DO PERPÉTUO SOCORRO</b></p>
                    <p><b>PRADO – IGUATU-CE</b></p>
                    <h2>{{ $equipe->equipe }}</h2>
                </div>
            </td>
            <td style="top: 0; right: 0; left: 10;">
                <img src="./img/logo/brasao.png" style="width: 70px; height: 150px;">
            </td>
        </tr>
         </table>
    <table>
    <tr>
        <td>
        @if (isset($equipe->jovens))
            <h2 style="margin-bottom:1px;">Jovens</h2>
            @foreach ($equipe->jovens as $item)
                <p style="font-size: 15px;"><b>{{$item['nome']}}</b></p>
                <p style="font-size: 14px;">{{$item['endereco']}}</p>
                <p style="font-size: 13px;"><b>DN</b>: {{$item['nacimento']}} - {{$item['telefone']}} </p><br>
            @endforeach
        @endif
        @if (isset($equipe->casais))
            <h2 style="margin-bottom:1px;">Casal</h2>
            @foreach ($equipe->casais as $item)
                <p style="font-size: 15px;"><b>{{$item['nome']}}</b></p>
                <p style="font-size: 14px;">{{$item['endereco']}}</p>
                <p style="font-size: 13px;"><b>DC</b>: {{$item['nacimento']}} - {{$item['telefone']}} </p>
            @endforeach
        @endif
        </td>
        <td class="alinhamento" style="top: 0; right: 0;">
            <img src="./storage/{{ $equipe->image }}" style="width: 300px;">
        </td>
    </tr>
    </table>
@if (isset($equipe->componentes))
    <div style="text-align: center;">
        <h2>Componentes</h2>
    </div>
    <table>
        @foreach ($equipe->componentes as $index => $item)
            @if ($index % 3 == 0 && $index != 0)
                </tr><tr> <!-- Fecha a linha anterior e inicia uma nova a cada 2 itens -->
            @endif
            <td>
                <p style="font-size: 14px;"><b>{{$item['nome']}}</b></p>
                <p style="font-size: 14px;">{{$item['endereco']}}</p>
                <p style="font-size: 13px;"><b>DN</b>: {{$item['nacimento']}} - {{$item['telefone']}} </p><br>
            </td>
        @endforeach
    </tr>
    </table>
@else
Preencha o formulário inserindo <br>os compeonentes da equipe
@endif




    </body>
</html>