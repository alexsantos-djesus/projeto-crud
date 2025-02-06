<?php
include('../includes/db.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $logo = $_FILES['logo']['name'];
    $logo_tmp = $_FILES['logo']['tmp_name'];

    if ($logo) {
        move_uploaded_file($logo_tmp, "../img/".$logo);
        $logo = ", logo = '$logo'";
    }

    $sql = "UPDATE times SET nome = '$nome', descricao = '$descricao' $logo WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>
