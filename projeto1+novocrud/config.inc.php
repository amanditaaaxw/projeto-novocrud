<?php


$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "sistema"; 


$conexao = new mysqli($servidor, $usuario, $senha, $banco);


if ($conexao->connect_error) {
    
    die("<h2 style='color:red;'>Falha na conexão com o MySQL: " . $conexao->connect_error . "</h2>");
}

