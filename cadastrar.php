<?php
include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO alunos (nome, email) VALUES ('$nome', '$email')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Erro: ". $conn->error;
}
?>