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

    <style>
        form {
            display: flex;
            gap: 15px;

            margin-bottom: 30px;
        }

        form div {
            display: flex;
            flex-direction: column;
        }

        input {
            padding: 10px 15px;
            border-radius: 5px;
            border: 1px solid #000;
        }

        select {
            padding: 10px 15px;
            border-radius: 5px;
            border: 1px solid #000;
        }

        [type="submit"] {
            text-transform: uppercase;
            cursor: pointer;
        }


        table {
            border-collapse: collapse;
            width: 60%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
            text-align: left;
        }
    </style>
</head>

<body>


    <form method="post" action="acoes/cadastrar_musica.php">
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

        <button type="submit">Cadastrar</button>

    </form>


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
                        <a href="./acoes/editar.php?musica=<?= $musica['id'] ?>">Editar</a> |
                        <a href="./acoes/excluir_musica.php?musica=<?=$musica['id']?>">Excluir</a>                   
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>