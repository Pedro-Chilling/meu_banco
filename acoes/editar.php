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
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", sans-serif;
    }

    body {
      background: #f5f3ee;
       display: flex; 
      align-items: center;
      padding: 30px; 
    }

    .card {
      margin: 0 auto;
      background: white;
      width: 60%;
      max-width: 1000px;
      padding: 35px;
      border-radius: 15px;

      border-top: 5px solid #b8860b;

      box-shadow:
        0 5px 20px rgba(0, 0, 0, .08);
    }

    h1 {
      color: #2f4858;
      margin-bottom: 10px;
    }

    p {
      color: #777;
      margin-bottom: 30px;
    }

    form {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    align-items: end;
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
      font-weight: bold;
      cursor: pointer;
      transition: .3s;
    }

    button:hover {
      background: #1f3441;
      transform: translateY(-2px);
    }

    .voltar {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      color: #2f4858;
      font-weight: bold;
    }

    .voltar:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <div class="card">

    <h1>🎵 Editar Música</h1>
    <p>Atualize as informações da música selecionada.</p>

    <form method="post" action="editar_musica.php">

      <!-- seus campos continuam aqui -->

    </form>

    <a class="voltar" href="../index.php">
      ← Voltar para repertório
    </a>

  </div>



  <form method="post" action="editar_musica.php">
    <input type="hidden" name="id" value="<?= $musica['id'] ?>">
    <div>
      <label for="nome">Nome da musica</label>
      <input id="nome" name="nome" type="text" placeholder="Nome da musica" value="<?= $musica['nome'] ?>" required>
    </div>

    <div>
      <label for="tom">Tom</label>
      <input id="tom" name="tom" type="text" placeholder="Tom" value="<?= $musica['tom'] ?>" required>
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