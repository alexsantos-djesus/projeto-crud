<?php include('includes/db.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Times</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Gestor de Times</h1>
    <a href="pages/add.php" class="btn">Adicionar Novo Time</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM time";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>
                    <a href='pages/gestao.php?id=".$row['id']."'>Gestão de Jogadores</a> |
                    <a href='pages/edit.php?id=".$row['id']."'>Editar</a> |
                    <a href='pages/delete.php?id=".$row['id']."'>Excluir</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
