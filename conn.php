<?php

const DB_HOST = 'localhost';
const DB_NAME = 'mml';
const DB_USER = 'root';
const DB_PASS = '';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

function executarQuery($SQL) {
  global $conn;

  $result = mysqli_query($conn, $SQL);

  if (verQualComandoE($SQL) === 'select') {
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
  }
  return $result;
}

function verQualComandoE($SQL) {
  $str = strtolower(trim($SQL));
  $comando = explode(' ', $str)[0];

  return $comando;
}