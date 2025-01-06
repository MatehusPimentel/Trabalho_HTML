<?php

$hostname = "localhost";
$bancodedados = "clientes";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    
} else {
    echo "Conectado ao Banco de Dados";
}

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$assunto = addslashes($_POST['assunto']);
$mensagem = addslashes($_POST['mensagem']);

$para = "recebermensagens26@gmail.com";
$tema = "Coleta de Dados";

$corpo = "Nome: " . $nome . "\n" . "Email: " . $email . "\n" . "Assunto: " . $assunto . "\n" . "Mensagem: " . $mensagem . "\n";

$cabeca = "From: recebermensagens26@gmail.com" . "\n" . "Reply-to: " . $email . "\n" . "X-Mailer: PHP/" . phpversion();

if (mail($para, $tema, $corpo, $cabeca)) {
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Houve um problema no envio da mensagem.";
}

?>