<?php

$usuario = 'root';
$senha = '';
$database = 'database';
$host = 'localhost';

$mysqli = new mysqli($host,$usuario,$senha,$database);

if($mysqli->error){
    die("Aqui é LOUD pain não da em nada. Erro ao conectar ao banco de dados: " . $mysqli->error);
}