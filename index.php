<?php include("conexao.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>
<body>
    <h2>Cadastrar Aluno</h2>

    <form method="POST" action="cadastrar.php">
        Nome: <input type="text" name="nome" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>

    <hr>
    <h2>Lista de alunos</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    <?php
    $sql = "SELECT * FROM alunos";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()){
        echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['nome']}</td>
        <td>{$row['email']}</td>
        <td>
            <a href='editor.php?id={$row['id']}'>Editar</a>
            <a href='excluir.php?id={$row['id']}'>Excluir</a>
        </td>
        </tr>";
    }
    ?>
    </table>
</body>
</html>