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
      font-family: Arial, Helvetica, sans-serif;
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
      grid-template-columns: 300px 1fr;
      gap: 50px;
    }

    .info h1 {
      color: #2f4858;
      margin-bottom: 15px;
      font-size: 38px;
    }

    .info p {
      color: #666;
      line-height: 1.6;
    }

    .voltar {
      display: inline-block;
      margin-top: 25px;
      color: #2f4858;
      text-decoration: none;
      font-weight: bold;
      transition: .3s;
    }

    .voltar:hover {
      color: #b8860b;
    }

    form {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 25px;
    }

    .campo {
      background: #fafafa;
      border: 1px solid #ececec;
      border-radius: 12px;
      padding: 15px;
    }

    .campo label {
      display: block;
      margin-bottom: 8px;
      color: #2f4858;
      font-size: 14px;
      font-weight: bold;
      text-transform: uppercase;
    }

    .campo p {
      margin: 0;
      color: #333;
      font-size: 17px;
      font-weight: 500;
    }


    .links {
      grid-column: span 2;
      display: flex;
      justify-content: center;
      gap: 25px;
      margin-top: 40px;
      flex-wrap: wrap;
    }

    .logo-link {
      background: #fff;
      border: 1px solid #ececec;
      border-radius: 15px;
      padding: 15px;
      width: 220px;
      height: 120px;

      display: flex;
      justify-content: center;
      align-items: center;

      transition: all .3s ease;
      box-shadow: 0 4px 12px rgba(0, 0, 0, .08);
    }

    .logo-link:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, .15);
      border-color: #b8860b;
    }

    .logo-link img {
      max-width: 90%;
      max-height: 80px;
      object-fit: contain;
    }

    .links {
      grid-column: span 2;
      display: flex;
      gap: 15px;
      margin-top: 35px;
    }

    .link {
      flex: 1;
    }

    .link a {
      text-decoration: none;
      display: block;
    }

    .link button {
      width: 100%;
      padding: 15px;
      border: none;
      border-radius: 12px;
      background: #2f4858;
      color: white;
      font-size: 15px;
      font-weight: bold;
      cursor: pointer;
      transition: .3s;
    }

    .link button:hover {
      background: #b8860b;
      transform: translateY(-3px);
    }

    @media (max-width: 900px) {

      .conteudo {
        grid-template-columns: 1fr;
      }

      form {
        grid-template-columns: 1fr;
      }

      .links {
        flex-direction: column;
      }

      .card {
        padding: 25px;
      }

      .info h1 {
        font-size: 30px;
      }
    }
  </style>
</head>

<body>

  <div class="card">

    <div class="conteudo">

      <div class="info">
        <h1>Informações</h1>
        <p>
          Informações da música selecionada.
        </p>

        <a class="voltar" href="listaMusicas.php">
          ← Voltar para repertório
        </a>
      </div>

      <form>

        <div class="campo">
          <label>Nome da Música</label>
          <p> <?= $musica['nome'] ?> </p>
        </div>

        <div class="campo">
          <label>Tom</label>
          <p> <?= $musica['tom'] ?></p>
        </div>

        <div class="campo">
          <label>Autor</label>
          <p> <?= $musica['autor'] ?> </p>
        </div>

        <div class="campo">
          <label>BPS</label>
          <p> <?= $musica['bps'] ?> </p>
        </div>

        <div class="campo">
          <label>Compasso</label>
          <p> <?= $musica['compasso'] ?> </p>
        </div>

      </form>


      <div class="links">

        <a href="<?= $musica['yt'] ?>" target="_blank" class="logo-link">
          <img src="./logos/youtube_logog.png" alt="YouTube">
        </a>

        <a href="<?= $musica['cifra'] ?>" target="_blank" class="logo-link">
          <img src="./logos/cifra_logo.png" alt="Cifra Club">
        </a>

        <a href="<?= $musica['letra'] ?>" target="_blank" class="logo-link">
          <img src="./logos/Logo_Letras.png" alt="Letras">
        </a>

      </div>


    </div>

  </div>

</body>

</html>