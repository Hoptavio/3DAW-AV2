<?php
//Começo Configuração Conexão
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "aluguel";

//Começo Criar Conexão
$con = new mysqli($host, $usuario, $senha, $banco);

//Começo Verificar Conexão
if ($con->connect_error) {
    die("Erro na conexão: " . $con->connect_error);
}
//Final Verificar Conexão
?>