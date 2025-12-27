<?php
/* Credenciais do banco de dados */
$servername = "localhost";
$username = "root";
$password = "";
$dados = "lista_clientes";

/*conectando ao banco de dados*/
$conn = new mysqli($servername, $username, $password, $dados);

/*verificando a conexão*/
if($conn->connect_error){
    die("Conexão falhou: " . $conn->connect_error);
}
?>