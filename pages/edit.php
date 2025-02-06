<?php 
include('../includes/db.php');
$id = $_GET['id'];
$sql = "SELECT * FROM time WHERE id = $id";
$result = $conn->query($sql);
$time = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Time</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1>Editar Time</h1>
    <form action="update.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $time['id'] ?>">
        <input type="text" name="nome" value="<?= $time['nome'] ?>" required>
        <button type="submit" class="btn">Salvar Alterações</button>
    </form>
    <a href="../index.php">Voltar</a>
</body>
</html>
