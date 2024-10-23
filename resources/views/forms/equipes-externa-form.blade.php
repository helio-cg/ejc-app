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

            p {
                margin: 8px 0; /* Margem superior e inferior de 5 pixels */
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
                    <p><b>PARÓQUIA DE N. SRA. DO PERPÉTUO SOCORRO</b><br>
                    <b>PRADO – IGUATU-CE</b></p>
                    <h2>EQUIPE DE EXTERNA</h2>
                </div>
            </td>
            <td style="top: 0; right: 0; left: 10;">
                <img src="./img/logo/brasao.png" style="width: 70px; height: 150px;">
            </td>
        </tr>
    </table>
    <h3 style="text-align: center;"><b><u>CASAL COORDENADOR</u></b></h3>
    <p><b>Nome:</b>_______________________________________ <b>Data de Casamento:</b> ____/____/______</p>
    <p><b>Endereço:</b> ______________________________________ <b>Bairro:</b>________________________</p>
    <p><b>Contato:</b> ( ____ ) ________________________ <b>Contato:</b> ( ____ ) ________________________</p>

    <br>
    <h3 style="text-align: center;"><b><u>COMPONENTES</u></b></h3>
    @for ($i = 0; $i < 15; $i++)
        <p><b>Nome:</b>_______________________________________ <b>Data de Casamento:</b> ____/____/______</p>
        <p><b>Endereço:</b> ______________________________________ <b>Bairro:</b>________________________</p>
        <p><b>Contato:</b> ( ____ ) ________________________ <b>Contato:</b> ( ____ ) ________________________</p><br>
    @endfor
    </body>
</html>