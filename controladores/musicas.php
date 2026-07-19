<?php
require_once __DIR__ . '/../conn.php';

// <!-- C = (CREAT) CADASTRAR Musicas  -->
function cadastrarMusica($dados){

    $nome = $dados['nome'];
    $tom = $dados['tom'];
    $bps = $dados['bps'];
    $autor = $dados['autor'];
    $compasso = $dados['compasso'];
    $yt = $dados['yt'];
    $cifra = $dados['cifra'];
    $letras = $dados['letras'];

    $SQL = "INSERT INTO musicas (nome, tom, bps, autor, compasso, yt, cifra, letras) VALUES ('$nome','$tom','$bps','$autor', '$compasso', '$yt', '$cifra', '$letras')";

    return executarQuery($SQL);
}

// <!-- R = (READ)LER Musicas          -->
function listarMusica(){
    $SQL = "SELECT * FROM musicas";

    $musicas = executarQuery($SQL);

    return $musicas;
}
function listarUmaMusica($id){
  $SQL = "SELECT * FROM musicas WHERE id = $id";

  $musicas = executarQuery($SQL)[0];

  return $musicas;
}

// <!-- U = (UPDATE) ATUALIZAR Musicas -->
function atualizarMusica($dados, $id){

    $nome = $dados['nome'];
    $tom = $dados['tom'];
    $bps = $dados['bps'];
    $autor = $dados['autor'];
    $compasso = $dados['compasso'];
    $yt = $dados['yt'];
    $cifra = $dados['cifra'];
    $letras = $dados['letras'];

    $SQL = "UPDATE musicas SET nome ='$nome', tom ='$tom', bps = '$bps', autor ='$autor', compasso = '$compasso', yt = '$yt', cifra = '$cifra', letras = '$letras'   WHERE id = $id";

    return executarQuery($SQL);
}

// <!-- D = (DELETE) DELETAR Musicas   -->
function deletarMusica($id){
    $SQL = "DELETE FROM musicas WHERE id = $id";

    return executarQuery($SQL);
}

