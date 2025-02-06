<?php
$servername = "localhost";
$username = "root";  // Usuário do MySQL
$password = "";      // Senha do MySQL
$dbname = "times_esportivos";  // Nome do banco de dados

// Criando conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
