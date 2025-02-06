<?php include('../includes/db.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Adicionar Time</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Seu CSS customizado, se necessário -->
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">Adicionar Time</h1>
    <div class="card">
      <div class="card-body">
        <form action="save.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nome">Nome do Time</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Time" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Salvar</button>
        </form>
      </div>
    </div>
    <div class="mt-3 text-center">
      <a href="../index.php" class="btn btn-secondary">Voltar</a>
    </div>
  </div>

  <!-- Bootstrap JS, Popper.js e jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
