<?php

require_once '../controladores/musicas.php';

$musica = listarUmaMusica($_GET['musica']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Musica</title>

  <style>
    *{
      font-family: Arial, Helvetica, sans-serif;
    }

    form {
      display: flex;
      gap: 15px;

      margin-bottom: 30px;
    }

    form div {
      display: flex;
      flex-direction: column;
    }

    select {
        padding: 10px 15px;
        border-radius: 5px;
        border: 1px solid #000;
    }

    input{
      padding: 10px 15px;
      border-radius: 5px;
      border: 1px solid #000;
    }

    [type="submit"]{
      text-transform: uppercase;
      cursor: pointer;
    }
  </style>
</head>
<body>
     <form method="post" action="editar_musica.php">
        <input type="hidden" name="id" value="<?= $musica['id'] ?>">
        <div>
            <label for="nome">Nome da musica</label>
            <input id="nome" name="nome" type="text" placeholder="Nome da musica" value="<?= $musica['nome'] ?>" required>
        </div>

        <div>
            <label for="tom">Tom</label>
            <input id="tom" name="tom" type="text" placeholder="Tom" value="<?= $musica['tom'] ?>"  required>
        </div>

        <div>
            <label for="bps">BPS</label>
            <input id="bps" name="bps" type="number" placeholder="BPS" value="<?= $musica['bps'] ?>" required>
        </div>

        <div>
            <label for="autor">Autor</label>
            <input id="autor" name="autor" type="text" placeholder="Autor" value="<?= $musica['autor'] ?>" required>
        </div>

        <div>
            <label for="compasso">Compasso</label>
            <select id="compasso" name="compasso" required>
                <option value="">Selecione</option>
                <option value="1/4" <?= $musica['compasso'] === '1/4' ? 'selected' : '' ?>>1/4</option>
                <option value="2/4" <?= $musica['compasso'] === '2/4' ? 'selected' : '' ?>>2/4</option>
                <option value="3/4" <?= $musica['compasso'] === '3/4' ? 'selected' : '' ?>>3/4</option>
                <option value="4/4" <?= $musica['compasso'] === '4/4' ? 'selected' : '' ?>>4/4</option>
                <option value="6/8" <?= $musica['compasso'] === '6/8' ? 'selected' : '' ?>>6/8</option>
                <option value="8/8" <?= $musica['compasso'] === '8/8' ? 'selected' : '' ?>>8/8</option>
            </select>
        </div>

        <button type="submit">Salvar</button>

    </form>

</body>
</html>