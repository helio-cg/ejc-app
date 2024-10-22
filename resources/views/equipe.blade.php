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

    <div style="text-align: center;">
        <p style="font-size: 24px;"><b>III ENCONTRO DE JOVENS COM CRISTO</b></p>
        <p><b>PARÓQUIA NOSSA SRA. DO PERPETUO SOCORRO – IGUATU-CE</b></p>
        <h2>{{ $equipe->equipe }}</h2>
    </div>
    <table>
    <tr>
        <td>
            <h2 style="margin-bottom:1px;">Jovens</h2>
            @foreach ($equipe->jovens as $item)
                <p style="font-size: 18px;"><b>{{$item['nome']}}</b></p>
                <p>{{$item['endereco']}}</p>
                <p><b>DN</b>: {{$item['nacimento']}} - {{$item['telefone']}} </p><br>
            @endforeach
            <h2 style="margin-bottom:1px;">Casal</h2>
            @foreach ($equipe->casais as $item)
                <p style="font-size: 18px;"><b>{{$item['nome']}}</b></p>
                <span>{{$item['endereco']}}</span>
                <p><b>DC</b>: {{$item['nacimento']}} - {{$item['telefone']}} </p>
            @endforeach
        </td>
        <td class="alinhamento" style="top: 0; right: 0;">
            <img src="./storage/{{ $equipe->image }}" style="width: 300px;">
        </td>
    </tr>
    </table>
    <div style="text-align: center;">
        <h2>Componentes</h2>
    </div>


<table>
    @foreach ($equipe->componentes as $index => $item)
        @if ($index % 2 == 0 && $index != 0)
            </tr><tr> <!-- Fecha a linha anterior e inicia uma nova a cada 2 itens -->
        @endif
        <td>
            <p style="font-size: 18px;"><b>{{$item['nome']}}</b></p>
            <p>{{$item['endereco']}}</p>
            <p><b>DN</b>: {{$item['nacimento']}} - {{$item['telefone']}} </p><br>
        </td>
    @endforeach
</tr>
</table>




    </body>
</html>