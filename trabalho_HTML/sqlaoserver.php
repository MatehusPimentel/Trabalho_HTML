<?php
// Conectar ao banco de dados MySQL
// ou o endereço do seu servidor MySQL
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "webcarros";

$conn = new mysqli($servername, $username, $password, $dbname, 7754);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Receber os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Consultar o banco de dados para verificar as credenciais
$sql = "SELECT * FROM usuarios WHERE nome='$email' AND senha='$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Usuário autenticado com sucesso
    echo "Login bem sucedido! Seja bem vindo, $nome .";
    header( 'Location: http://localhost/NOVO_HTML/IN00.html');
} else {
    // Credenciais inválidas
    echo "Usuário ou senha incorretos.";
}

// Fechar a conexão
$conn->close();
?>