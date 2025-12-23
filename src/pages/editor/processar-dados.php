<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

/*pegando os dados do formulário*/
$cliente = $_POST['cliente'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$observacoes = $_POST['observacoes'];
$data_atual = date("d/m/Y");
$hora_atual = date("H:i:s");

/*conectando ao banco de dados*/
$conn = new mysqli("localhost", "root", "", "lista_clientes");

/*verificando a conexão*/
if($conn->connect_error){
    die("Conexão falhou: " . $conn->connect_error);
}
/*inserindo os dados na tabela*/
$stmt = $conn->prepare("INSERT INTO clientes (cliente, endereco, telefone, observacoes, data, hora) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $cliente, $endereco, $telefone, $observacoes, $data_atual, $hora_atual);

/*verificando se os dados foram inseridos com sucesso*/
if($stmt->execute()){
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>