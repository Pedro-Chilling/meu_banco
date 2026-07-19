<?php

require_once '../controladores/musicas.php';

$musicas = listarMusica();
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musicas</title>

    <link rel="icon" type="image/png" href="logo.site.png">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f5f3ee;
            font-family: "Segoe UI", sans-serif;
            color: #2c2c2c;
            padding: 40px;
        }

        h1 {
            margin-bottom: 25px;
        }

        form {
            width: 90%;
            background: white;
            padding: 25px;
            border-radius: 15px;
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            align-items: end;

            border-top: 5px solid #b8860b;

            box-shadow:
                0 5px 20px rgba(0, 0, 0, .08);

            margin-bottom: 30px;
        }

        form div {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 6px;
            font-weight: 600;
            color: #2f4858;
        }

        input,
        select {
            width: 190px;
            padding: 12px;
            border: 1px solid #d6d6d6;
            border-radius: 8px;
            outline: none;
            transition: .3s;
        }

        input:focus,
        select:focus {
            border-color: #b8860b;
            box-shadow: 0 0 8px rgba(184, 134, 11, .2);
        }

        button {
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            background: #2f4858;
            color: white;
            cursor: pointer;
            font-weight: bold;
            transition: .3s;
        }

        button:hover {
            background: #1f3441;
            transform: translateY(-2px);
        }

        table {
            width: 90%;
            background: white;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 15px;

            box-shadow:
                0 5px 20px rgba(0, 0, 0, .08);
        }

        thead {
            background: #2f4858;
            color: white;
            text-align: left;
        }

        th {
            padding: 16px;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 1px;
        }

        td {
            align-items: center;
            padding: 15px;
        }

        tbody tr {
            border-bottom: 1px solid #ececec;
            transition: .2s;
        }

        tbody tr:hover {
            background: #faf8f2;
        }

        tbody tr:last-child {
            border-bottom: none;
        }

        td a {
            text-decoration: none;
            font-weight: 600;
        }

        td a:first-child {
            color: #1d4ed8;
        }

        td a:last-child {
            color: #dc2626;
        }

        td a:hover {
            opacity: .7;
        }

        .titulo {
            margin-bottom: 25px;
            color: #2f4858;
            font-size: 32px;
        }

        .subtitulo {
            color: #777;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>

    <h1 class="titulo">Cadastrar Músicas</h1>
    <p class="subtitulo">
        Gerenciamento de músicas do ministério
    </p>


    <form method="post" action="./cadastrar_musica.php">
        <div>
            <label for="nome">Nome da musica</label>
            <input id="nome" name="nome" type="text" placeholder="Nome da musica" required>
        </div>

        <div>
            <label for="tom">Tom</label>
            <input id="tom" name="tom" type="text" placeholder="Tom" required>
        </div>

        <div>
            <label for="bps">BPS</label>
            <input id="bps" name="bps" type="number" placeholder="BPS" required>
        </div>

        <div>
            <label for="autor">Autor</label>
            <input id="autor" name="autor" type="text" placeholder="Autor" required>
        </div>

        <div>
            <label for="compasso">Compasso</label>
            <select id="compasso" name="compasso" required>
                <option value="">Selecione</option>
                <option value="1/4">1/4</option>
                <option value="2/4">2/4</option>
                <option value="3/4">3/4</option>
                <option value="4/4">4/4</option>
                <option value="6/8">6/8</option>
                <option value="8/8">8/8</option>
            </select>
        </div>


        <div>
            <label for="yt">Youtube</label>
            <input id="yt" name="yt" type="link" placeholder="Link do Youtube" required>
        </div>

        <div>
            <label for="cifra">Cifra</label>
            <input id="cifra" name="cifra" type="link" placeholder="Cifra" required>
        </div>

        <div>
            <label for="letras">Letras</label>
            <input id="letras" name="letras" type="link" placeholder="Letras" required>
        </div>



        <button type="submit">Cadastrar</button>

    </form>

        <div>
            <a class="voltar" href="../index.php">
                ← Voltar para repertório
            </a>
        </div>

</body>

</html>