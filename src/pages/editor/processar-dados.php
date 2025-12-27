<?php
require_once 'config.php';

/*pegando os dados do formulário*/
$cliente = $_POST['cliente'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$observacoes = $_POST['observacoes'];
$data_atual = date("d/m/Y");
$hora_atual = date("H:i:s");


/*inserindo os dados na tabela*/
$stmt = $conn->prepare("INSERT INTO clientes (cliente, endereco, telefone, observacoes, data, hora) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $cliente, $endereco, $telefone, $observacoes, $data_atual, $hora_atual);

/*verificando se os dados foram inseridos com sucesso*/
if($stmt->execute()){
     header("Location: index.html");
} else {
    echo "Erro ao inserir dados: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>