<?php
include('../includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome       = $_POST['nome'];
    
    $sql = "INSERT INTO time (nome) VALUES ('$nome')";

    if ($conn->query($sql) === TRUE) {
        // Exibe mensagem de sucesso com Bootstrap
        echo <<<HTML
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Sucesso</title>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        </head>
        <body>
            <div class="container mt-5">
                <div class="alert alert-success text-center" role="alert">
                    Time inserido com sucesso!
                </div>
                <div class="text-center">
                    <a href="../index.php" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </body>
        </html>
HTML;
        exit();
    } else {
        // Exibe mensagem de erro com Bootstrap
        echo <<<HTML
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Erro</title>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        </head>
        <body>
            <div class="container mt-5">
                <div class="alert alert-danger text-center" role="alert">
                    Erro ao inserir time: {$conn->error}
                </div>
                <div class="text-center">
                    <a href="../index.php" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </body>
        </html>
HTML;
        exit();
    }
}
?>
