<?php

require_once '../controladores/musicas.php';

$id = $_POST['id'];

$dados = $_POST;

unset($dados['id']);

$atualizou = atualizarMusica($dados, $id);

header('Location: http://localhost/php/GestaoMusicas/listaMusicas.php');