<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EJC</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
                <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">



        <style>
        html, body {
            font-family: "Roboto", sans-serif;
    height: 100%;
    margin: 0;
}

.container {
    place-items: center;
    height: 100%;
}

.btn-verde {
    background-color: #000000; /* Verde */
    color: white; /* Texto branco */
    border: none; /* Sem borda */
    border-radius: 5px; /* Bordas arredondadas */
    padding: 20px 30px; /* Espaçamento interno */
    font-size: 16px; /* Tamanho da fonte */
    cursor: pointer; /* Cursor de mão ao passar o mouse */
    font-weight: bold;
    transition: background-color 0.3s; /* Transição suave para a cor de fundo */
}

.btn-verde:hover {
    background-color: #218838; /* Tom mais escuro ao passar o mouse */
}
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="container">
            <br>
            <img src="./img/logo/logo.png">
            <br>
            <h2>Cadastro das equipes de trabalho</h2>
            <h3>Clique no botão relacionado a sua equipe</h3>
            <br>
            <p style="margin-bottom: 50px;"><a class="btn-verde" href="http://ejc.stmip.net/equipe/equipes/1/edit">Equipe de Secrétaria</a></p>
            <p style="margin-bottom: 50px;"><a class="btn-verde" href="http://ejc.stmip.net/equipe/equipes/2/edit">Equipe de Cafezinho</a></p>
            <p style="margin-bottom: 50px;"><a class="btn-verde" href="http://ejc.stmip.net/equipe/equipes/3/edit">Equipe de Circulos</a></p>
            <p style="margin-bottom: 50px;"><a class="btn-verde" href="http://ejc.stmip.net/equipe/equipes/4/edit">Equipe de Compras</a></p>
            <p style="margin-bottom: 50px;"><a class="btn-verde" href="http://ejc.stmip.net/equipe/equipes/5/edit">Equipe de Graçons</a></p>
            <p style="margin-bottom: 50px;"><a class="btn-verde" href="http://ejc.stmip.net/equipe/equipes/6/edit">Equipe de Limpeza</a></p>
            <p style="margin-bottom: 50px;"><a class="btn-verde" href="http://ejc.stmip.net/equipe/equipes/7/edit">Equipe de Liturgia</a></p>
            <p style="margin-bottom: 50px;"><a class="btn-verde" href="http://ejc.stmip.net/equipe/equipes/8/edit">Equipe de Mini Bar</a></p>
            <p style="margin-bottom: 50px;"><a class="btn-verde" href="http://ejc.stmip.net/equipe/equipes/9/edit">Equipe de Sala</a></p>
            <p style="margin-bottom: 50px;"><a class="btn-verde" href="http://ejc.stmip.net/equipe/equipes/10/edit">Equipe de Sociodrama</a></p>
            <p style="margin-bottom: 50px;"><a class="btn-verde" href="http://ejc.stmip.net/equipe/equipes/11/edit">Equipe de Vigilia</a></p>
            <br>
            <br>
        </div>
    </body>
</html>
