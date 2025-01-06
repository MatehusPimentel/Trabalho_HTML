<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "webcarros";

    $conn = new mysqli($servername, $username, $password, $dbname, 7754);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    $name = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$name', '$email', '$senha');";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário: " . $conn->error;
    }

    $conn->close();

<header('location:http://127.0.0.1:5500/cadastrofeito.html')>

?>