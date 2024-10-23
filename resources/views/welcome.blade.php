<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EJC</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


        <style>
        html, body {
    height: 100%;
    margin: 0;
}

.container {
    display: grid;
    place-items: center;
    height: 100%;
}

.btn-verde {
    background-color: #28a745; /* Verde */
    color: white; /* Texto branco */
    border: none; /* Sem borda */
    border-radius: 5px; /* Bordas arredondadas */
    padding: 10px 20px; /* Espaçamento interno */
    font-size: 16px; /* Tamanho da fonte */
    cursor: pointer; /* Cursor de mão ao passar o mouse */
    transition: background-color 0.3s; /* Transição suave para a cor de fundo */
}

.btn-verde:hover {
    background-color: #218838; /* Tom mais escuro ao passar o mouse */
}
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="container">
            <h1>Clique no botão relacionado a sua equipe</h1>
            <a class="btn-verde" href="http://ejc.stmip.net/equipe/equipes/1/edit">Equipe de Secrétaria</a>
        </div>
    </body>
</html>
