<?php
//Começo Incluir Conexão
require "conexao.php";

//Começo Receber Dados do Formulário
$id = $_POST['id_acomodacao'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data_inicio = $_POST['data_inicio'];
$data_fim = $_POST['data_fim'];
$valor = $_POST['valor_total'];

//Começo Preparar e Executar SQL
$sql = "INSERT INTO reservas (id_acomodacao, nome_cliente, email_cliente, telefone_cliente, data_inicio, data_fim, valor_total)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $con->prepare($sql);
$stmt->bind_param("isssssd", $id, $nome, $email, $telefone, $data_inicio, $data_fim, $valor);

//Começo Executar e Retornar Resultado
if ($stmt->execute()) {
    echo "<script>alert('Reserva concluída com sucesso!'); window.location.href='../index.html';</script>";
} else {
    echo "Erro ao reservar: " . $con->error;
}
//Final Executar e Retornar Resultado

$stmt->close();
$con->close();
?>