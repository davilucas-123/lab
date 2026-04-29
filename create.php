<?php
require 'config.php';
include 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome  = $_POST['nome'];
    $email = $_POST['email'];

    mysqli_query($conn, "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    

    <div class="card shadow-lg">
  <div class="card-body">
    <h3 class="mb-4 text-center">Novo Usuário</h3>

    <form method="POST">
      <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Digite o nome" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Digite o email" required>
      </div>

      <div class="d-flex justify-content-between">
        <a href="index.php" class="btn btn-secondary">Voltar</a>
        <button type="submit" class="btn btn-success">Salvar</button>
      </div>
    </form>

  </div>
</div>

</body>
</html>
<?php include 'footer.php'; ?>