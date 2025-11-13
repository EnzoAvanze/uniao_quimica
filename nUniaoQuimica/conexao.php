<?php
$servername = "localhost";
$username = "root";
$password = "Senai@118";
$dbname = "uniao_quimica";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Adiciona a coluna 'imagem' à tabela 'produto' se ela não existir
$sql = "SHOW COLUMNS FROM produto LIKE 'imagem'";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
    $sql = "ALTER TABLE produto ADD COLUMN imagem VARCHAR(255)";
    $conn->query($sql);
}

// Adiciona a coluna 'imagem' à tabela 'fornecedor' se ela não existir
$sql = "SHOW COLUMNS FROM fornecedor LIKE 'imagem'";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
    $sql = "ALTER TABLE fornecedor ADD COLUMN imagem VARCHAR(255)";
    $conn->query($sql);
}
?>