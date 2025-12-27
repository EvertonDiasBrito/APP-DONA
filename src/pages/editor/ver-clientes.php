<?php
require_once 'config.php';
$senhaSecreta = "123";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senhadigitada = $_POST['senha'];
    
    /*digitou a senha correta*/
    if ($senhadigitada === $senhaSecreta) {
       $sql = "SELECT * FROM clientes";
         $result = $conn->query($sql);
    } else {
        echo "Senha incorreta. Acesso negado.";
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>listaclientes</title>
</head>

<body class="body-clientes">
    <header>
        
        <div class="logo">
            <img class="logo-img" src="../../../img/donalogo.png" width= 20% alt ="logomarca Dona">
            Dona Lavanderia
            
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="clientes.html">Clientes</a></li>
                <li><a href="pedidos.html">Pedidos</a></li>
                <li><a href="relatorios.html">Relatórios</a></li>

            </ul>
        </nav>

    </header>
    <section class="formulario">
        <h1 class="client">Clientes ativos</h1>
        <form class="client-form" method="POST">
            
            <label for="cliente">Senha:</label>
            <input type="password" id="" name="senha" placeholder="Digite sua senha" >
            
            <div class="btn-enviar"><button class="btn-enviar" type="submit">Enviar</button></div>

        </form>
    </section>
    <div class="lista-clientes">
        <?php
        if (isset($result) && $result->num_rows > 0) : ?>
        <h2>Cadastrados</h2>
    
        <ul>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <li>
                    <strong>Cliente:</strong> <?php echo $row['cliente']; ?><br>
                    <strong>Endereço:</strong> <?php echo $row['endereco']; ?><br>
                    <strong>Telefone:</strong> <?php echo $row['telefone']; ?><br>
                    <strong>Observações:</strong> <?php echo $row['observacoes']; ?><br>
                    
                </li>
            <?php endwhile; ?>
        </ul>
    <?php elseif (isset($result)) : ?>
        <p>Nenhum cliente encontrado.</p>
    <?php endif; ?>
    </div>
     
</body>
</html>