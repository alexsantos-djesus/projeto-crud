<?php
include('../includes/db.php');

$dataHora = date('Y-m-d H:i:s');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idTime         = $_POST['idTime'];
    $nome           = $_POST['nome'];
    $idade          = $_POST['idade'];
    $pernaJogador   = $_POST['pernaJogador'];
    $posicaoJogador = $_POST['posicaoJogador'];

    $sql = "INSERT INTO jogadores (time_id, nome, idade, perna, posicao, data_inclusao) VALUES ($idTime, '$nome', $idade, '$pernaJogador', '$posicaoJogador', '$dataHora')";

    if ($conn->query($sql) === TRUE) {
        // Mensagem de sucesso
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
                    Jogador inserido com sucesso!
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
        // Mensagem de erro
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
                    Erro ao inserir jogador: {$conn->error}
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
