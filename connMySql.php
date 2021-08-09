<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$dbname ='test';


//criar a conexao facil
$pdo = new PDO("mysql:dbname=".$dbname.";host=".$servidor,$usuario,$senha);