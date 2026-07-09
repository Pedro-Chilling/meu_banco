<?php

require_once '../controladores/musicas.php';

deletarMusica($_GET['musica']);

header('Location: http://localhost/php/meu_banco/');