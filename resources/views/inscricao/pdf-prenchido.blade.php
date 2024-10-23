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
            @media print {
                .quebra-pagina {
                    page-break-before: always; /* Quebra a página antes deste elemento */
                }
            }
            body {
                font-family: "Roboto", sans-serif;
                font-style: normal;
            }

            table {
                width: 700px; /* Largura da tabela em pixels */
                border-collapse: collapse; /* Para que as bordas se unam */
            }

        </style>
    </head>
    <body>
    <table border="1" style="border: 1px solid black;">
        <tr>
            <td>
                <h3 style="text-align: center;">ENCONTRO DE JOVENS COM CRISTO<br>ARTICULAÇÃO DIOCESANA</h3>
            </td>
        </tr>
    </table>
    <p style="text-align: center;"><b>PARÓQUIA DE N. SRA. DO PERPÉTUO SOCORRO - PRADO - IGUATU-CE</b></p>
    <h3 style="text-align: center;"><b><u>FICHA DE INSCRIÇÃO Nº &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u></b></h3>

    <p style="text-align: center;"><b>ATENÇÃO:</b> PREENCHIMENTO EXCLUSIVO DO EJC – PASTA FICHAS<br>
    Azul (____)	Verde (____) Amarelo (____)	Vermelho (____)	Rosa (____)	Branco (____)</p>

    <h4>1. DADOS PESSOAIS</h4>
    <table>
        <tr>
            <td>
                <p><b>Nome Completo:</b> {{ $inscrito->nome_completo}}</p>
                <p><b>Nome ou apelido que gostaria de ser chamado:</b> ____________________</p>
                <p><b>Data de nascimento:</b> ____/____/______ <b>Idade</b> (anos completos): _______</p>
                <p><b>Sexo:</b> Masculino (__) Feminino (__)  <b>Telefone(s):</b> _____________________</p>
                <p><b>E-mail:</b> ______________________________________________________</p>
            </td>
            <td style="border: 1px solid black; width: 150px; text-align: center; background-color: #e5e5e5;">
                FOTO
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <p><b>Endereço:</b> __________________________________ <b>Bairro:</b> ____________________________</p>
                <p><b>Complemento:</b> ____________________________________________ <b>CEP:</b> __________-_____</p>
                <p><b>Ponto de referência:</b> ____________________________________________________________</p>
            </td>
        </tr>
    </table>

    <h4>2. INFORMAÇÕES ADICIONAIS</h4>
    <p>Possui alguma necessidade especial?</p>
    <p>_______________________________________________________________________________</p>
    <p>Tem alguma restrição alimentar? Sim (____)  Não (____)</p>
    <p>Faz uso de algum medicamento? Sim (____) Não (____)</p>

    <br>
    <h4>3. FILIAÇÃO</h4>
    <p>Pai: ___________________________________________________________________________</p>
    <p>Mãe: __________________________________________________________________________</p>

    <div class="quebra-pagina"></div>
    <br>
    <p>Seus pais já fizeram o Encontro de Casais com Cristo? SIM (____) NÃO (____)</p>
    <p>Onde: _________________________________________________________________________</p>
    <p>Seus pais participam de algum movimento religioso? SIM (____) NÃO (____)</p>
    <p>Onde: _________________________________________________________________________</p>

    <br>
    <h4>4. DADOS ESCOLARES</h4>
    <p>Estuda: SIM (____) NÃO (____) Colégio/Faculdade: ____________________________________</p>
    <p>Curso: __________________________ Série:____________ Nível: __________ Turno: ________</p>
    <p>Caso não estude, indique até que período estudou:</p>
    <p>_______________________________________________________________________________</p>

    <br>
    <h4>5. DADOS PROFISSIONAIS</h4>
    <p>Trabalha? SIM (____) NÃO (____) Se sim, onde?_______________________________________</p>
    <p>Horários: _______________________________________________________________________</p>
    <p style="text-align: center;"><b>OBSERVAÇÃO:</b><br> CASO TRABALHE NO FINAL DE SEMANA, FAVOR SOLICITAR DISPENSA PARA PARTICIPAR DO ENCONTRO!</p>

    <br>
    <h4>6. DADOS GERAIS</h4>
    <p>Participa de algum grupo/movimento de jovens? SIM (___) NÃO (___) Horário: _______________</p>
    <p>Nome do movimento: ______________________________ Qual religião? ___________________</p>
    <p>Tem irmãos? SIM (___) NÃO (___) Quantos? ______________</p>
    <p>Tem algum irmão ou parente inscrito no EJC? Sim (___) Não (___) Grau Parentesco: __________</p>
    <p>Nome(s) do jovem: _______________________________________________________________</p>

    <div class="quebra-pagina"></div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h4>7. DADOS DO ENCONTRO</h4>
    <p>Convidado por: _________________________________ Telefone(s): ______________________</p>
    <p>Eu, ________________________________________________	, autorizo meu (minha) filho(a) a participar do Encontro de Jovens com Cristo da Paróquia</p>

    <br>
    <p style="text-align: right;">Iguatu, _____ de ______________ de {{ date('Y') }}</p><br>

    <br>
    <table style="text-align: center;">
        <tr>
            <td style="padding-bottom: 50px;">___________________________ <br> Jovem</td>
            <td  style="padding-bottom: 50px;">___________________________ <br> Responsável</td>
        </tr>

        <tr>
            <td style="padding-bottom: 50px;">___________________________ <br> Pasta Fichas</td>
            <td  style="padding-bottom: 50px;">___________________________ <br> Diretor Espiritual</td>
        </tr>
    </table>


    <h3 style="text-align: center;">ATENÇÃO!</h3>

    <p style="text-align: center;">CRITÉRIOS que devem ser observados ao se visitar os jovens para participar do EJC:<br>
    Idade entre 16 (dezesseis) e 24 (vinte e quatro anos) anos<br>
    Morar nas localidades da Paróquia<br>
    A ficha deverá ser devolvida totalmente preenchida, incluindo as assinaturas do participante e de seu responsável legal<br>
    É obrigatória a presença do jovem participante durante os três dias do Encontro.<p>
    <p style="text-align: center;">*Esta ficha de inscrição não garante a sua participação no Encontro.</p>


    <br>

    <p style="text-align: center;"><b>O B S E R V A Ç Õ E S:</b></p>
    <p>_______________________________________________________________________________</p>
    <p>_______________________________________________________________________________</p>
    <p>_______________________________________________________________________________</p>
    <p>_______________________________________________________________________________</p>
    <p>_______________________________________________________________________________</p>

    <br>
    <br>
    <p style="text-align: center;">
    _________________________________________ <br>
    Tios visitadores
    </p>


    </body>
</html>