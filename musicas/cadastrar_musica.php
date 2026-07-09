<?php 
 
require_once '../controladores/musicas.php';

cadastrarMusica($_POST);

header('Location: http://localhost/php/meu_banco/');