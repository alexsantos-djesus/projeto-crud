<?php
include '../includes/db.php';

$id  = $_GET['id'];
// Consulta o time
$sql = "SELECT * FROM time WHERE id = $id";
$result = $conn->query($sql);
$time = $result->fetch_assoc();

// Consulta os jogadores do time
$sqlPlayers = "SELECT * FROM jogadores WHERE time_id = $id ORDER BY id DESC";
$resultPlayers = $conn->query($sqlPlayers);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestão de Jogadores</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <!-- Cabeçalho -->
    <h1 class="mb-4 text-center">Gestão de Jogadores</h1>
    
    <!-- Card para adicionar novo jogador -->
    <div class="card mb-4">
      <div class="card-header">
        Adicionar Jogador ao Time: <?php echo htmlspecialchars($time['nome']); ?>
      </div>
      <div class="card-body">
        <form action="saveJogadores.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="idTime" value="<?php echo htmlspecialchars($time['id']); ?>">

          <div class="form-group">
            <label for="nome">Nome do Jogador</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Jogador" required>
          </div>

          <div class="form-group">
            <label for="idade">Idade do Jogador</label>
            <input type="number" class="form-control" id="idade" name="idade" placeholder="Idade do Jogador" required>
          </div>

          <div class="form-group">
            <label for="pernaJogador">Perna do Jogador (E ou D)</label>
            <input type="text" class="form-control" id="pernaJogador" name="pernaJogador" placeholder="Perna do Jogador"
                   pattern="[ED]" maxlength="1" required oninput="this.value = this.value.toUpperCase();">
          </div>

          <div class="form-group">
            <label for="posicaoJogador">Posição do Jogador</label>
            <input type="text" class="form-control" id="posicaoJogador" name="posicaoJogador" placeholder="Posição do Jogador" required>
          </div>

          <button type="submit" class="btn btn-primary btn-block">Salvar Alterações</button>
        </form>
      </div>
    </div>

    <!-- Card para listagem de jogadores -->
    <div class="card">
      <div class="card-header">
        Lista de Jogadores
      </div>
      <div class="card-body">
        <?php if ($resultPlayers->num_rows > 0): ?>
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Idade</th>
                  <th>Perna</th>
                  <th>Posição</th>
                  <th>Data de Inclusão</th>
                </tr>
              </thead>
              <tbody>
                <?php while($jogador = $resultPlayers->fetch_assoc()): ?>
                  <tr>
                    <td><?php echo htmlspecialchars($jogador['id']); ?></td>
                    <td><?php echo htmlspecialchars($jogador['nome']); ?></td>
                    <td><?php echo htmlspecialchars($jogador['idade']); ?></td>
                    <td><?php echo htmlspecialchars($jogador['perna']); ?></td>
                    <td><?php echo htmlspecialchars($jogador['posicao']); ?></td>
                    <td>
                      <?php 
                        // Formata a data para o padrão "d/m/Y H:i"
                        echo date("d/m/Y H:i", strtotime($jogador['data_inclusao'])); 
                      ?>
                    </td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        <?php else: ?>
          <p class="text-center">Nenhum jogador cadastrado para este time.</p>
        <?php endif; ?>
      </div>
    </div>

    <!-- Botão de voltar -->
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
