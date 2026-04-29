<?php
require 'config.php';
include 'header.php';

$result = mysqli_query($conn, "SELECT * FROM usuarios");
?>

<h2 class="text-center mb-4">Usuários</h2>

<?php if (mysqli_num_rows($result) > 0) { ?>
<div class="d-flex justify-content-end mb-3">
  <a href="create.php" class="btn btn-primary">Novo Usuário</a>
</div>
<?php } ?>

<div class="card shadow-lg">
    <div class="card-body">

        <?php if (mysqli_num_rows($result) > 0) { ?>

        <table class="table table-hover text-center align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nome'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm"
                           onclick="return confirm('Deseja excluir?')">Excluir</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>

        </table>

        <?php } else { ?>

       <div class="card shadow-sm text-center">
  <div class="card-body py-5">
    <h4 class="mb-3">Nenhum usuário encontrado</h4>
    <p class="text-muted">Comece cadastrando o primeiro usuário</p>
    <a href="create.php" class="btn btn-success">Cadastrar Usuário</a>
  </div>
</div>

        <?php } ?>

    </div>
</div>

<?php include 'footer.php'; ?>