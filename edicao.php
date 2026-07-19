<?php

require_once './controladores/musicas.php';

$musica = listarUmaMusica($_GET['musica']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Musica</title>

  <link rel="icon" type="image/png" href="logo.site.png">

  <style>
    body {
      background: #f5f3ee;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 40px;
    }

    .card {
      width: 100%;
      max-width: 1100px;
      background: white;
      border-radius: 20px;
      border-top: 5px solid #b8860b;
      box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
      padding: 40px;
    }

    .conteudo {
      display: grid;
      grid-template-columns: 350px 1fr;
      gap: 50px;
    }

    .info h1 {
      color: #2f4858;
      margin-bottom: 10px;
      font-size: 40px;
    }

    .info p {
      color: #777;
      line-height: 1.6;
    }

    form {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }

    .campo {
      display: flex;
      flex-direction: column;
    }

    .campo-full {
      grid-column: span 2;
    }

    label {
      margin-bottom: 8px;
      font-weight: 600;
      color: #2f4858;
    }

    input,
    select {
      width: 80%;
      padding: 14px;
      border: 1px solid #d6d6d6;
      border-radius: 10px;
      font-size: 15px;
    }

    input:focus,
    select:focus {
      border-color: #b8860b;
      box-shadow: 0 0 8px rgba(184, 134, 11, .2);
    }

    .botao-area {
      grid-column: span 2;
      display: flex;
      justify-content: flex-end;
      margin-top: 10px;
    }

    button {
      padding: 14px 35px;
      border: none;
      border-radius: 10px;
      background: #2f4858;
      color: white;
      font-size: 15px;
      font-weight: bold;
      cursor: pointer;
    }

    button:hover {
      background: #1f3441;
    }

    .voltar {
      display: inline-block;
      margin-top: 25px;
      color: #2f4858;
      text-decoration: none;
      font-weight: 600;
    }
  </style>
</head>

<body>

  <div class="card">

    <div class="conteudo">

      <div class="info">
        <h1>🎵 Editar Música</h1>
        <p>
          Atualize as informações da música selecionada.
        </p>

        <a class="voltar" href="index.php">
          ← Voltar para repertório
        </a>
      </div>

      <form method="post" action="musicas/editar_musica.php">

        <input type="hidden" name="id" value="<?= $musica['id'] ?>">

        <div class="campo">
          <label>Nome da Música</label>
          <input type="text" name="nome"
            value="<?= $musica['nome'] ?>" required>
        </div>

        <div class="campo">
          <label>Tom</label>
          <input type="text" name="tom"
            value="<?= $musica['tom'] ?>" required>
        </div>

        <div class="campo">
          <label>Autor</label>
          <input type="text" name="autor"
            value="<?= $musica['autor'] ?>" required>
        </div>

        <div class="campo">
          <label>BPS</label>
          <input type="number" name="bps"
            value="<?= $musica['bps'] ?>" required>
        </div>

        <div class="campo campo-full">
          <label>Compasso</label>

          <select name="compasso" required>
            <option value="1/4" <?= $musica['compasso'] === '1/4' ? 'selected' : '' ?>>1/4</option>
            <option value="2/4" <?= $musica['compasso'] === '2/4' ? 'selected' : '' ?>>2/4</option>
            <option value="3/4" <?= $musica['compasso'] === '3/4' ? 'selected' : '' ?>>3/4</option>
            <option value="4/4" <?= $musica['compasso'] === '4/4' ? 'selected' : '' ?>>4/4</option>
            <option value="6/8" <?= $musica['compasso'] === '6/8' ? 'selected' : '' ?>>6/8</option>
            <option value="8/8" <?= $musica['compasso'] === '8/8' ? 'selected' : '' ?>>8/8</option>
          </select>
        </div>

        <div class="botao-area">
          <button type="submit">
            💾 Salvar Alterações
          </button>
        </div>

      </form>

    </div>

  </div>

</body>

</html>