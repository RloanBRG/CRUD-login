<?php
include("conexao.php");

$id = $_GET['id'];

if ($_SERVER("REQUEST_METHOD") == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "UPDATE alunos SET nome='$nome', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    }
}

$sql = "SELECT * FROM alunos WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>
<body>
    <h2>Ediatr Aluno</h2>

    <from method="POST">
        Nome: <input type="text" name="nome" value="<?php echo $row['nome']; ?>"><br><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
        <button type="submit">Atualizar</button>
    </from>
