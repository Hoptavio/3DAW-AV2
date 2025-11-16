<?php
//Começo Incluir Conexão
require "conexao.php";

//Começo Consulta Acomodações
$sql = "SELECT id, nome, descricao, preco, imagem FROM acomodacoes";
$result = $con->query($sql);

$dados = [];

//Começo Processar Resultados
while ($row = $result->fetch_assoc()) {
    $row["nome_formatado"] = $row["nome"] . " — R$ " . $row["preco"];
    $dados[] = $row;
}
//Final Processar Resultados

//Começo Retornar JSON
header('Content-Type: application/json');
echo json_encode($dados);
//Final Retornar JSON
?>