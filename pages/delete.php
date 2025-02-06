<?php
include('../includes/db.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sqlJogadores = "DELETE FROM jogadores WHERE time_id = $id";
    $sqlTime = "DELETE FROM time WHERE id = $id";
    
    if ($conn->query($sqlJogadores) === TRUE && $conn->query($sqlTime) === TRUE) {
        header("Location: ../index.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>
