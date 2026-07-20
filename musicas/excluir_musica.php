<?php

require_once '../controladores/musicas.php';

deletarMusica($_GET['musica']);

header('Location: http://localhost/php/GestaoMusicas/listaMusicas.php ');