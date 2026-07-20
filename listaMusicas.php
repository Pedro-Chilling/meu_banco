<?php

require_once __DIR__ . '/controladores/musicas.php';

$musicas = listarMusica();
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musicas</title>

    <link rel="icon" type="image/png" href="./logos/logo.site.png">

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


    <h1 class="titulo">Lista de musicas</h1>
    <p class="subtitulo">
        Musicas Cadastradas
    </p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Tom</th>
                <th>BPS</th>
                <th>Autor</th>
                <th>Compasso</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($musicas as $musica) {
            ?>
                <tr>
                    <td><?= $musica['id']; ?></td>
                    <td><?= $musica['nome']; ?></td>
                    <td><?= $musica['tom']; ?></td>
                    <td><?= $musica['bps']; ?></td>
                    <td><?= $musica['autor']; ?></td>
                    <td><?= $musica['compasso']; ?></td>
                    <td>
                        <a href="./edicao.php?musica=<?= $musica['id'] ?>">Editar</a> |
                        <a href="./musicas/excluir_musica.php?musica=<?= $musica['id'] ?>">Excluir</a> |
                        <a href="./detalhes.php?musica=<?= $musica['id'] ?>">Detalhes</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

        <div>
            <a class="voltar" href="./cadastros.php">
                ← Cadastrar nova música
            </a>
        </div>
        <div>
            <a class="voltar" href="./index.php">
                ← Pagina inicial
            </a>
        </div>


</body>

</html>